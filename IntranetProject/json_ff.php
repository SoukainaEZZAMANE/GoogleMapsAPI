<?php
			include ('config.php');
			require_once('BD.php');
			extract($_GET);
			$result = mysql_query("SELECT attitude,langitude,organisation_f,email_f,tel_f,site_f,secteur_f,desc_f from formation where id_f= '".$id."' ", $db);
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
					
					$file = fopen("data_ff.json",'w+');
					
					 fwrite($file, 'var data_ff= {"num" : "'.$num.'", "photos": ');
					 fclose($file);

					 
					 $file = fopen("data_ff.json",'a');
					 fwrite($file, $text);
					 fclose($file);
					 

					$file = fopen("data_ff.json",'a');
					fwrite($file, '}');
					fclose($file);
				}
				$smarty->display('map_ff.html');
				}
?>