<?php
			include ('config.php');
			require_once('BD.php');
			extract($_GET);
			
			$result = mysql_query("SELECT attitude , langitude ,organisme_c,email_c, tel_c, site_c, desc_c from concour where  id_c= '".$id."' ", $db);
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
					
					$file = fopen("data_cc.json",'w+');
			
					 fwrite($file, 'var data_cc = {"num" : "'.$num.'", "photos": ');
					 fclose($file);

					 
					 $file = fopen("data_cc.json",'a');
					 fwrite($file, $text);
					 fclose($file);
					 

					$file = fopen("data_cc.json",'a');
					fwrite($file, '}');
					fclose($file);
				}
					
				$smarty->display('map_cc.html');

				}
?>