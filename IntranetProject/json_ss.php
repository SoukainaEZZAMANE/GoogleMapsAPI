<?php
			extract($_GET);
			include ('config.php');
		require_once('BD.php');
		
			$result = mysql_query("SELECT attitude , langitude ,entreprise_s,email_s, tel_s, site_s,secteur_s,desc_entr_s from stage where id_s = '".$id."' ", $db);
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
					
					$file = fopen("data_ss.json",'w+');
		
					 fwrite($file, 'var data_ss = {"num" : "'.$num.'", "photos": ');
					 fclose($file);

					 
					 $file = fopen("data_ss.json",'a');
					 fwrite($file, $text);
					 fclose($file);
					 

					$file = fopen("data_ss.json",'a');
					fwrite($file, '}');
					fclose($file);
				}
		
				$smarty->display('map_ss.html');
				}
?>