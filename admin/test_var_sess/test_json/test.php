<?php
    // Instruction 1  
    $fp = fopen ("masterData.js", "r");  
    // Instruction 2  
    $contenu_du_fichier = fread ($fp, filesize('masterData.js'));  
    // Instruction 3  
    fclose ($fp);  
    // Instruction 4  
	$json = json_decode ($contenu_du_fichier);
   print ($json->{'compe'});
?>