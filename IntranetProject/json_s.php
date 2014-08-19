<?php
			include ('config.php');
		    require_once('BD.php');
			$result = mysql_query("SELECT attitude , langitude ,entreprise_s,email_s, tel_s, site_s,secteur_s,desc_entr_s from stage", $db);
			$num = mysql_num_rows($result);
			$rows = array();
			if (! $result){
			   echo "ERROR";
					  }
			else {

				while($r = mysql_fetch_assoc($result)){
					$rows[] = $r;
					}
					$text = json_encode($rows);
					if ($text != null) {
			
					$file = fopen("data_s.json",'w+');
					
					 fwrite($file, 'var data_s = {"num" : "'.$num.'", "photos": ');
					 fclose($file);

					 
					 $file = fopen("data_s.json",'a');
					 fwrite($file, $text);
					 fclose($file);
					 

					$file = fopen("data_s.json",'a');
					fwrite($file, '}');
					fclose($file);
				}
	
				$smarty->display('map_s.html');
				}
?>