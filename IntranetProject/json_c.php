<?php
			include ('config.php');
			require_once('BD.php');

		
			$result = mysql_query("SELECT attitude , langitude ,organisme_c,email_c, tel_c,site_c from concour", $db);
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
					//print $text;
					$file = fopen("data_c.json",'w+');
					//$str = """"
					//$str = addslashes();
					 fwrite($file, 'var data_c = {"num" : "'.$num.'", "photos": ');
					 fclose($file);

					 
					 $file = fopen("data_c.json",'a');
					 fwrite($file, $text);
					 fclose($file);
					 

					$file = fopen("data_c.json",'a');
					fwrite($file, '}');
					fclose($file);
				}
					
				//echo "ok";
				$smarty->display('map_c.html');

				}
?>