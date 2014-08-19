<?php /* Smarty version Smarty-3.1.12, created on 2014-02-20 23:58:21
         compiled from "smarty\templates\map_e.html" */ ?>
<?php /*%%SmartyHeaderCode:1683250cf8dd1109c55-72893849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f2c87b05ba6807913f8d75e9991cae75cf07d46' => 
    array (
      0 => 'smarty\\templates\\map_e.html',
      1 => 1355918400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1683250cf8dd1109c55-72893849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50cf8dd1161132_46583085',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cf8dd1161132_46583085')) {function content_50cf8dd1161132_46583085($_smarty_tpl) {?>    <!DOCTYPE html>   
    <html>   
        <head>   
          
        <title>Fullscreen Google map with jQuery mobile</title>  
          
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />  
        <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>  
        <script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>  
		 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="gmap3.min.js"></script> 
    <script type="text/javascript" src="data_e.json"></script>
          <style type="text/css">  
    .ui-icon.ui-icon-favorite, .ui-icon.ui-icon-radar,   
    .ui-icon.ui-icon-information, .ui-icon.ui-icon-evenement {  
        margin-top: -16px;  
        margin-left: -19px;  
        width: 37px;  
        height: 37px;  
        box-shadow: none;  
    }  
    .ui-icon.ui-icon-favorite {  
        background: url(static/images/favorite.png) top center;  
    }  
    .ui-icon.ui-icon-radar {  
        background: url(static/images/radar.png) top center;  
    }  
    .ui-icon.ui-icon-information {  
        background: url(static/images/information.png) top center;  
    }  
    .ui-icon.ui-icon-evenement {  
        background: url(static/images/evenement.png) top center;  
    }  
</style>
<script type="text/javascript">
      var script = '<script type="text/javascript" src="markerclusterer.js">';
    </script>


<script type="text/javascript">   
    var infoBulle = new google.maps.InfoWindow();  
 	  function initialize(){
  var oMap, oMarker, oInfo;
   var marks = [];
  var i, nb = data_e.num;
  // création de la carte
  oMap = new google.maps.Map( document.getElementById( 'map'),{
    'center' : new google.maps.LatLng( 31.6333333, -8.0000000),
    'zoom' : 5,
	'popup' : true,
    'mapTypeId' : google.maps.MapTypeId.ROADMAP
  });
    // création infobulle
  var oInfo = new google.maps.InfoWindow();
  // création des markers dans une boucle
  for( i = 0; i < nb; i++){
    oMarker = new google.maps.Marker({
      'position' : new google.maps.LatLng( data_e.photos[i].attitude, data_e.photos[i].langitude),
      'map' : oMap,
      'title' : data_e.photos[i].desc_entr_e,
	  'popup' : true,
	  'icon' : 'pastille-bleue.png'	  
    });
	
	//remlissage du contenu de chaque marker
	var contenu = '<h2> <font face="comic" color="blue" >Organisme:'+data_e.photos[i].entreprise_e+' </font></h2>'
							 +'<p> <font face="comic" color="black" ><b> Téléphone :</b>'+ data_e.photos[i].tel_e+' </font></p>'
							+'<p> <font face="comic" color="black" ><b> Email : </b>'+ data_e.photos[i].email_e+' </font></p>'
							+'<p> <font face="comic" color="black" ><b> Site : </b>'+ data_e.photos[i].site_e+' </font></p>' ;
	
      bindInfoWindow(oMarker, contenu);
	marks.push(oMarker);
	}
  //association de chaque Marker avec son infobulle
  function bindInfoWindow(marqueur, info) {
            google.maps.event.addListener(marqueur, 'click', function() {
                infoBulle.setContent(info);
                //infoBulle.open(map, marqueur);
					if (isInfoWindowOpen(infoBulle)){
						infoBulle.close();
					} else {
						infoBulle.open(map, marqueur);
					}
				
            });
			
	}		
	
	function isInfoWindowOpen(infoWindow){
			return (infoWindow.getMap()!=null);
	}

var markerCluster = new MarkerClusterer(oMap, marks);
  
}				
								
   google.maps.event.addDomListener(window, 'load', initialize); 
</script>
    </head>   
      
    <body>   
      
    <div data-role="page" id="map" data-theme="a">  
      
        <div data-role="header" id="header" data-position="fixed">  
            <h1>Fullscreen Google map with jQuery mobile</h1>  
        </div>  
      
       <div data-role="content" id="content" style="padding:0">  
    <div id="map"></div>  
</div> 
          
        <div data-role="footer" data-position="fixed">          
             
        </div>  
          
    </div>  
      
    </body>  
    </html>  <?php }} ?>