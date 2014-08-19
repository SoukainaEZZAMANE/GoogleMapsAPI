<?php
			include ('config.php');
		require_once('BD.php');
			extract($_GET);
		
			$result = mysql_query("SELECT attitude , langitude ,entreprise_e,email_e, tel_e, site_e, desc_entr_e from emploi where id_e = '".$id."' ", $db);
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
				
					$file = fopen("data_ee.json",'w+');
					
					 fwrite($file, 'var data_ee = {"num" : "'.$num.'", "photos": ');
					 fclose($file);

					 
					 $file = fopen("data_ee.json",'a');
					 fwrite($file, $text);
					 fclose($file);
					 

					$file = fopen("data_ee.json",'a');
					fwrite($file, '}');
					fclose($file);
				}
				
				$smarty->display('map_ee.html');
				}
?>