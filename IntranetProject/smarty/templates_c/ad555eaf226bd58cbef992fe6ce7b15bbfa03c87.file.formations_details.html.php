<?php /* Smarty version Smarty-3.1.12, created on 2014-02-21 00:06:50
         compiled from "smarty\templates\formations_details.html" */ ?>
<?php /*%%SmartyHeaderCode:3085050c33982ec63d5-96390839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad555eaf226bd58cbef992fe6ce7b15bbfa03c87' => 
    array (
      0 => 'smarty\\templates\\formations_details.html',
      1 => 1358285414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3085050c33982ec63d5-96390839',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c339831b6643_32256234',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c339831b6643_32256234')) {function content_50c339831b6643_32256234($_smarty_tpl) {?><!doctype html>
<html lang="en">
   <head>
		<title>THE FINDER</title>
		<meta charset="utf-8" />
		
		   <meta name="viewport" content="width=device-width,initial-scale=1"/>
           <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"/>
           <link rel="stylesheet" href="css/jquery-mobile.css" />
           <link rel="stylesheet" href="css/finder.css" />
  <style>  
   #ac
	  
	  {
		  
		  background:url(img/i2.jpg); background-repeat:no-repeat;}
		  #ac:hover
		  { background:url(img/i4.png);
		  }</style>
	       <script src="js/jquery.js"></script>
	       <script src="js/jquery-mobile.js"></script>
		  
		   
	
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script> 
		
	
		<script type="text/javascript" src="js/jquery.ui-1.8.15/jquery.ui.autocomplete.min.js"></script>
		<script type="text/javascript" src="js/demo.js"></script>
		<script type="text/javascript" src="ui/jquery.ui.map.js"></script>
		<script type="text/javascript" src="ui/jquery.ui.map.services.js"></script>
		<script type="text/javascript" src="ui/jquery.ui.map.extensions.js"></script>
        
		<script type="text/javascript">				
			var mobileDemo = { 'center': '57.7973333,12.0502107', 'zoom': 10 };
			$('#directions_map').live('pageinit', function() {
				demo.add('directions_map', function() {
					$('#map_canvas_1').gmap({'center': mobileDemo.center, 'zoom': mobileDemo.zoom, 'disableDefaultUI':true, 'callback': function() {
						var self = this;
						self.set('getCurrentPosition', function() {
							self.refresh();
							self.getCurrentPosition( function(position, status) {
								if ( status === 'OK' ) {
									var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
									self.get('map').panTo(latlng);
									self.search({ 'location': latlng }, function(results, status) {
										if ( status === 'OK' ) {
											$('#from').val(results[0].formatted_address);
										}
									});
								} else {
									alert('Unable to get current position');
								}
							});
						});
						$('#submit').click(function() {
							self.displayDirections({ 'origin': $('#from').val(), 'destination': $('#to').val(), 'travelMode': google.maps.DirectionsTravelMode.DRIVING }, { 'panel': document.getElementById('directions')}, function(response, status) {
								( status === 'OK' ) ? $('#results').show() : $('#results').hide();
							});
							return false;
						});
					}});
				}).load('directions_map');
			});
			
			$('#directions_map').live('pageshow', function() {
				demo.add('directions_map', $('#map_canvas_1').gmap('get', 'getCurrentPosition')).load('directions_map');
			});
</script>

<script type="text/javascript">$('#note_utilisateur').live('change', function(){	 
			$('div.ui-select').removeClass(SelectedOptionClass);
            	 });
            </script>	
    </head>
    <body>
 <div data-role="page" style="background:url(img/imag.png);background-repeat:no-repeat;">
    <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
              <a data-rel="back" data-icon="back" rel="external">Back</a>
                                <?php if ($_SESSION['tr']==1){?>
            <a href ="deconnexion.php" rel="external"> Déconnexion </a>
                      
            <?php }?>
			 <?php if ($_SESSION['tr']==2){?>
            <a href ="deconnexion2.php" rel="external"> Déconnexion </a>
                      
            <?php }?>
               <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>
				
            </div>
    <div data-role="content" >
        <div class="ui-grid-a">
            <div class="ui-block-a">
                <div style="">
                    <img style="width: 128px; height: 128px" src="../admin/image/<?php echo $_smarty_tpl->tpl_vars['data']->value['image_f'];?>
">
                </div>
            </div>
            <div class="ui-block-b">
                 <a href="json_ff.php?&action=localiser&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_f'];?>
"  rel="external"><input  data-icon="check" data-iconpos="left" value="Carte"
                type="button" data-theme="s"></a>
                 <a href="#directions_map" rel="external"><input  data-icon="check" data-iconpos="left" value="Calculer les itinéraires"
                type="button" data-theme="s"></a>
                <a href="tel:<?php echo $_smarty_tpl->tpl_vars['data']->value['tel_f'];?>
" rel="external"> <input  data-icon="check" data-iconpos="left" value="Appeler la société"
                type="button" data-theme="s"> </a></div>
        </div>
        
        
       <div>
        <table border="0">
               <tr><td> <b>
                    Date dépot:  </b></td><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['date_depot_f'];?>
</td></tr>
                          
              
              
            
               <tr><td> <b>
                    Organisation:  </b></td><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['organisation_f'];?>
</td></tr>
              
             
               <tr><td><b>
                    Nom du Résponsable:  </b></td><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['resp_f'];?>
</td></tr>
              
          
               <tr><td> <b>
                    Adresse:  </b></td><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['lieu_f'];?>
</td></tr>
              
             
               <tr><td> <b>
                    Email:  </b></td><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['email_f'];?>
</td></tr>
             
               <tr><td> <b>
                    Site Web:  </b></td><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['site_f'];?>
</td></tr>
            
               <tr><td> <b>
                    Tél:  </b></td><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['tel_f'];?>
</td></tr>
                    
              
           
               <tr><td> <b>
                    Sujet de formation:</b></td><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['secteur_f'];?>
</td></tr>
              
               <tr><td> <b>
                    Ville:</b></td><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['ville_f'];?>
</td></tr>
                    <br>
                
          
          
               <tr><td> <b>
                    Durée de formation: </b></td><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['dure_f'];?>
</td></tr>
                    <br>
               
           
               <tr><td> <b>
                    Nombres de postes:</b></td><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['nbr_poste_f'];?>
</td></tr>
               
              </b>
            
              <tr><td>  <b>
                    Description: </b></td><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['desc_f'];?>
</td></tr>
            </table>
        </div>
        </div>
   
    <div data-role="footer" data-position="fixed">
            
            <div data-role="navbar" data-iconpos="top" data-theme="a">
                <ul>
                    <li>
                        <a href="index.php" data-transition="fade" data-theme="" data-icon="home" id="ac" rel="external">
                            Accueil
                        </a>
                    </li>
                    <li>
                      <a href="contact.php" data-rel="dialog"  data-theme="" data-icon="star"  data-transition="fade" id="ac" rel="external">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.php" data-transition="fade" data-theme="" data-icon="info" id="ac" rel="external">
                            A propos
                        </a>
                    </li>
                </ul>
            </div>
</div>
</div>
<div id="directions_map" data-role="page">
		 <div data-role="header" style="background:url(img/images8.png); background-repeat:no-repeat;">
				
				<h1>Itinéraire de la formation</h1>
								<a data-rel="back" data-icon="back" >Back</a>
			</div>
			<div data-role="content">	
				<div class="ui-bar-c ui-corner-all ui-shadow" style="padding:1em;">
					<div id="map_canvas_1" style="height:300px;"></div>
					<p>
						<label for="from">De</label>
						<input id="from" class="ui-bar-c" type="text" value="" />
					</p>
					<p>
						<label for="to">A</label>
						<input id="to" class="ui-bar-c" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['lieu_f'];?>
" />
					</p>
					<a id="submit" href="#" data-role="button" data-icon="search">Get directions</a>
				</div>
				<div id="results" class="ui-listview ui-listview-inset ui-corner-all ui-shadow" style="display:none;">
					<div class="ui-li ui-li-divider ui-btn ui-bar-b ui-corner-top ui-btn-up-undefined">Results</div>
					<div id="directions"></div>
					<div class="ui-li ui-li-divider ui-btn ui-bar-b ui-corner-bottom ui-btn-up-undefined"></div>
				</div>
			</div>
		</div>
</body>
</html>
<?php }} ?>