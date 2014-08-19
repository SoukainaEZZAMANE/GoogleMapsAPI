<?php
/**
 * Mise en forme des résultats
 *
 */
class GeoCodedAddresses {
	
	public $arrayOfAddress; // Array of Address_result
	public $no_results;
	/**
	 * Constructeur
	 * Met le compteur à zéro
	 *
	 */
	function __construct(){
		$this->no_results = 0;
	}
	/**
	 * Ajoute un adresse dans les résultats
	 *
	 * @param String $house numéro de la maison
	 * @param String $street nom de la rue
	 * @param String $city no de la ville
	 * @param String $zipcode code postal
	 * @param String $country Pays
	 */
	function addResult($house,$street,$city,$zipcode,$country,$quality=""){
		$adresse = new Address_result($house,$street,$city,$zipcode,$country,$quality);
		$this->arrayOfAddress[] = $adresse;
		$this->no_results++;		
	}	
}
/**
 * Classe Address_result
 * Représente l'adresse
 *
 */
class Address_result {
	
	public $HouseNo;
	public $Street;
	public $City;
	public $ZipCode;
	public $Country;
	public $Quality;
	/**
	 * Création d'une nouvelle adresse
	 *
	 * @param String $house numéro de la maison
	 * @param String $street nom de la rue
	 * @param String $city no de la ville
	 * @param String $zipcode code postal
	 * @param String $country Pays
	 */
	function __construct($house,$street,$city,$zipcode,$country,$quality=""){
		$this->HouseNo = $house;
		$this->Street = $street;
		$this->City = $city;
		$this->ZipCode = $zipcode;
		$this->Country = $country;
		$this->Quality = $quality;
	}
	
}

?>