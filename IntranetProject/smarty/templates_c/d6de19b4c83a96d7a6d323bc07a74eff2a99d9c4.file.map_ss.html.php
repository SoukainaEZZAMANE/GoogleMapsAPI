<?php /* Smarty version Smarty-3.1.12, created on 2012-12-26 14:46:52
         compiled from "smarty\templates\map_ss.html" */ ?>
<?php /*%%SmartyHeaderCode:2543750d0e00067afe1-67951611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6de19b4c83a96d7a6d323bc07a74eff2a99d9c4' => 
    array (
      0 => 'smarty\\templates\\map_ss.html',
      1 => 1356050578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2543750d0e00067afe1-67951611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d0e000702ab8_25650582',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d0e000702ab8_25650582')) {function content_50d0e000702ab8_25650582($_smarty_tpl) {?>    <!DOCTYPE html>   
    <html>   
        <head>   
          
        <title>Localisation du stage</title>  
          
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />  
        <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>  
        <script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>  
		 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="gmap3.min.js"></script> 
    <script type="text/javascript" src="data_ss.json"></script>
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
 <script>

function initialize() {  
        var latlng = new google.maps.LatLng(data_ss.photos[0].attitude, data_ss.photos[0].langitude);  
        var myOptions = {  
            zoom:18,  
            center: latlng,  
            mapTypeId: google.maps.MapTypeId.ROADMAP  
        };  
        var map = new google.maps.Map(  
                                document.getElementById("map_canvas"),   
                                myOptions);
	
var imageMarqueur =( new google.maps.MarkerImage('pastille-bleue.png'),
 new google.maps.Size(24, 24),
 new google.maps.Point(0,0),
 new google.maps.Point(12, 12));

  var infowindow1 = new google.maps.InfoWindow();
    
     var marker1 = new google.maps.Marker({
          position: latlng,
          map: map,
          title: data_ss.photos[0].desc_entr_s,
          icon: "pastille-bleue.png"
     });
   infoWindow1= new google.maps.InfoWindow({ 
    content: '<h2> <font face="comic" color="blue" >Organisme:'+data_ss.photos[0].entreprise_s+' </font></h2>'
							+'<p> <font face="comic" color="black" ><b> Secteur :</b>'+ data_ss.photos[0].secteur_s+' </font></p>'
							 +'<p> <font face="comic" color="black" ><b> T�l�phone :</b>'+ data_ss.photos[0].tel_s+' </font></p>'
							+'<p> <font face="comic" color="black" ><b> Email : </b>'+ data_ss.photos[0].email_s+' </font></p>'
							+'<p> <font face="comic" color="black" ><b> Site : </b>'+ data_ss.photos[0].site_s+' </font></p>' , 
	});
	google.maps.event.addListener(marker1 , 'click', function() { 
  infoWindow1.open(map, marker1);});
  }
  
	 
  
					
								
	/*	 //var testmarkerpos = new google.maps.LatLng(45.7452,4.8418);
//creation de linfobulle 
		var testmarker = new google.maps.Marker({
		position: latlng,
		map: map,
		animation: google.maps.Animation.DROP
		});

//var contentString1 ='hello';
// activation de linfobulle 
var infowindow1 = new google.maps.InfoWindow({
content: "Bonjour",
maxWidth: 200
});

google.maps.event.addListener(testmarker, 'click', function() {
infowindow1.open(map,testmarker);
});*/
  
      
      
    $('#map').live('pageshow', function(event) {  
        $("#map_canvas").width("1350");  
        $("#map_canvas").height("800");
        initialize();  
    });  
</script>
    </head>   
      
    <body>   
      
    <div data-role="page" id="map" data-theme="a">  
      
        <div data-role="header" id="header" data-position="fixed">  
	 <a href="" data-rel="back" data-role="button">Back</a>
            <h1>Localisation du stage</h1>  
        </div>  
      
       <div data-role="content" id="content" style="padding:0">  
    <div id="map_canvas"></div>  
</div> 
          
        <div data-role="footer" data-position="fixed">          
             
        </div>  
          
    </div>  
      
    </body>  
    </html>  <?php }} ?>