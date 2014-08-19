<?php
/**
 * Class qui permet d'utiliser le web service de geocodeur Google
 *
 */

class GoogleGeocoder{
	
	private $key = "[votre clé]";
	private $url = "http://maps.google.com/maps/geo?output=xml";
	
	public $resultat;
	public $result_query = array(
		200=>"SUCCESS",
		400=>"BAD_REQUEST",
		500=>"SERVER_ERROR",
		601=>"MISSING_QUERY",
		601=>"MISSING_ADDRESS",
		602=>"UNKNOWN_ADDRESS",
		603=>"UNAVAILABLE_ADDRESS",
		604=>"UNKNOWN_DIRECTIONS",
		610=>"BAD_KEY",
		620=>"TOO_MANY_QUERIES"
	);
	public $accuracy_query = array(
		0=>"ACCURACY_UNKNOWN",
		1=>"ACCURACY_COUNTRY",
		2=>"ACCURACY_REGION",
		3=>"ACCURACY_SUBREGION",
		4=>"ACCURACY_TOWN",
		5=>"ACCURACY_POSTCODE",
		6=>"ACCURACY_STREET",
		7=>"ACCURACY_INTERSECTION",
		8=>"ACCURACY_ADDRESS"
	);
	
	/**
	 * Recherche l'adresse passée en paramètre
	 * 
	 * @param string $query
	 */
	function query($query){
		try{
			// Recherche des BP			
			$query = str_replace(" ","+",trim($query));
			$buffer = file_get_contents($this->url."&key=".$this->key."&q=$query");
			$xml = new SimpleXMLElement(utf8_encode($buffer));
			return $xml;
			//$this->resultat = new GoogleResult($xml);
		}catch(Exception $e){
			echo $buffer;
			die;
		}
	}
	/**
	 * Affiche le résultat de la recherche dans un tableau
	 *
	 */
	function readableStatus($id){
		return $this->result_query[$id];
	}
	function readableAccuracy($id){
		return $this->accuracy_query[$id]." ($id/8)";
	}
	function toString(){
		try{
			echo "<h3> Nombre de résultats : ".$this->result->nbResults." (max 10)<br>
			Status de la requête : ".$this->readableStatus($this->result->status)."</h3>";
			foreach($this->resultat->responses as $result){
				echo "<table style=\"border:1px solid gray;float:left; margin:5px;\">";
				foreach($result as $var=>$val){
					if($var==status)$val = $this->readableStatus($val);
					if($var==accuracy)$val = $this->readableAccuracy($val);
					echo "<tr><th>$var</th><td>$val</td></tr>";
				}
				echo "</table>";
			}
		}catch(Exception $e){
			echo "Erreur";
		}
	}
	function getAccuracy(){
		return $this->result->accuracy;
	}
}
class Google_result extends GeoCodedAddresses {
	
	function __construct($res){

		$xml = $res->asXML();
		preg_match_all("/<Placemark.*?>(.*?)<\/Placemark>/msi",$xml,$preg_response);
		$preg_response = $preg_response[1];
		$i=0;
		$nb = count($preg_response);

		foreach($preg_response as $asxml){
			preg_match("/Accuracy=\"([0-9]?)\"/msi",$asxml,$preg_accuracy);
			preg_match("/<CountryNameCode>(.*?)<\/CountryNameCode>/msi",$asxml,$preg_country);
			preg_match("/<AdministrativeAreaName>(.*?)<\/AdministrativeAreaName>/msi",$asxml,$preg_administrative_area);
			preg_match("/<SubAdministrativeAreaName>(.*?)<\/SubAdministrativeAreaName>/msi",$asxml,$preg_departement);
			preg_match("/<LocalityName>(.*?)<\/LocalityName>/msi",$asxml,$preg_locality);
			preg_match("/<DependentLocalityName>(.*?)<\/DependentLocalityName>/msi",$asxml,$preg_dependant_locality);
			preg_match("/<ThoroughfareName>(.*?)<\/ThoroughfareName>/msi",$asxml,$preg_dependant_rue);
			preg_match("/<PostalCodeNumber>(.*?)<\/PostalCodeNumber>/msi",$asxml,$preg_cp);
			
			$accuracy = $preg_accuracy[1];
			$Country	= $preg_country[1];	
			$region = $preg_administrative_area[1];	
			$departement = $preg_departement[1];	
			$City = $preg_locality[1];	
			$Street = $preg_dependant_rue[1];	
			$Zip = $preg_cp[1];
			
			if($accuracy == 8 && $Country == "FR"){
				$expl_adresse = explode(",",$Street);
				$HouseNo = $expl_adresse[0];
				$Street = $expl_adresse[1];
			}elseif($accuracy == 8 && $Country == "BE"){
				preg_match("/([0-9]+$)/msi",$Street,$preg_adresse);
				$HouseNo = $preg_adresse[1];
				$Street = preg_replace("/([0-9]+$)/msi","",$adresse);
			}
			
			$this->addResult($HouseNo,$Street,$City,$Zip,$Country);				
		}
		
		
	}
}
/**
 * SAMPLE
	$query = "$street $zipcode $city $country";
	$req = new GoogleGeocoder();
	$google_result = new Google_result($req->query($query));
	print_r($google_result);
/**/
?>