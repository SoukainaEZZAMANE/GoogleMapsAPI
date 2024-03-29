<?php /* Smarty version Smarty-3.1.12, created on 2013-01-15 21:06:04
         compiled from "smarty\templates\map_s.html" */ ?>
<?php /*%%SmartyHeaderCode:2286250cf8dfc8ea985-05433998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '091ec5b2e965728cb3677b6e328c54e6975a2713' => 
    array (
      0 => 'smarty\\templates\\map_s.html',
      1 => 1358283406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2286250cf8dfc8ea985-05433998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50cf8dfc93a964_36106762',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cf8dfc93a964_36106762')) {function content_50cf8dfc93a964_36106762($_smarty_tpl) {?>    <!DOCTYPE html>   
    <html>   
        <head>   
          
        <title>Fullscreen Google map with jQuery mobile</title>  
          
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />  
        <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>  
        <script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>  
		 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="gmap3.min.js"></script> 
    <script type="text/javascript" src="data_s.json"></script>
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
  var i, nb = data_s.num;
  // cr�ation de la carte
  oMap = new google.maps.Map( document.getElementById( 'map'),{
    'center' : new google.maps.LatLng( 31.6333333, -8.0000000),
    'zoom' : 5,
	'popup' : true,
    'mapTypeId' : google.maps.MapTypeId.ROADMAP
  });
    // cr�ation infobulle
  var oInfo = new google.maps.InfoWindow();
  // cr�ation des markers dans une boucle
  for( i = 0; i < nb; i++){
    oMarker = new google.maps.Marker({
      'position' : new google.maps.LatLng( data_s.photos[i].attitude, data_s.photos[i].langitude),
      'map' : oMap,
      'title' : data_ss.photos[i].desc_entr_s,
	  'popup' : true,
	  'icon' : 'pastille-bleue.png'	  
    });
	
	//remlissage du contenu de chaque marker
	var contenu = '<h2> <font face="comic" color="blue" >Organisme:'+data_s.photos[i].entreprise_s+' </font></h2>'
							+'<p> <font face="comic" color="black" ><b> Secteur :</b>'+ data_s.photos[i].secteur_s+' </font></p>'
							 +'<p> <font face="comic" color="black" ><b> T�l�phone :</b>'+ data_s.photos[i].tel_s+' </font></p>'
							+'<p> <font face="comic" color="black" ><b> Email : </b>'+ data_s.photos[i].email_s+' </font></p>'
							+'<p> <font face="comic" color="black" ><b> Site : </b>'+ data_s.photos[i].site_s+' </font></p>';
	
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