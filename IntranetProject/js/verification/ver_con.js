$(document).ready(function(){
function organisme_c(){
	if($('#organisme_c').val()==""){
$('#organisme_c').css('border-color','#ff0000');

return 0;
}
else
	{
	$('#organisme_c').css('border-color','#339900');
)
	return 1; 
	}
	
}	

function ville_c()
{	
	if($('#ville_c').val()=="")
{
$('#ville_c').css('border-color','#ff0000');

return 0;
}
else
	{
	$('#ville_c').css('border-color','#339900');

	return 1; 
	}
	
}
function email_c()
{
if($('#email_c').val()=="" || !$('#email_c').val().match(/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/) )
{
$('#email_c').css('border-color','#ff0000');

return 0;
}
else
	{
	$('#email_c').css('border-color','#339900');

	return 1; 
	}
	
}

function date_fin_c()
{
if($('#date_fin_c').val()=="")
{
$('#date_fin_c').css('border-color','#ff0000');
return 0;
}
else
	{
	$('#date_fin_c').css('border-color','#339900');
	return 1; 
	}
	
}

function date_c()
{
if($('#date_c').val()=="")
{
$('#date_c').css('border-color','#ff0000');
return 0;
}
else
	{
	$('#date_c').css('border-color','#339900');
	return 1; 
	}
	
}

function pieces_c()
{
if($('#pieces_c').val()=="")
{
$('#pieces_c').css('border-color','#ff0000');
return 0;
}
else
	{
	$('#pieces_c').css('border-color','#339900');
	return 1; 
	}
	
}

function password()
{
if($('#password').val()=="")
	{
$('#password').css('border-color','#ff0000');
return 0;
}
else
	{$('#password').css('border-color','#339900');
	return 1;
	}
}

function niveau_c()
{
	if($('#niveau_c').val()=="")
	{
$('#niveau_c').css('border-color','#ff0000');
return 0;
}
else
	{$('#niveau_c').css('border-color','#339900');
	return 1;
	}
}

function cpassword()
{
	if($('#cpassword').val()=="" || !($('#password').val()== $('#cpassword').val()))
	{
$('#cpassword').css('border-color','#ff0000');
return 0;
}
else
	{$('#cpassword').css('border-color','#339900');
	return 1;
	}
}


function domaine_c()
{
	if($('#domaine_c').val()=="")
	{
$('#domaine_c').css('border-color','#ff0000');
return 0;
}
else
	{$('#domaine_c').css('border-color','#339900');
	return 1;
	}
}

function fonction()
{
	if($('#fonction').val()=="")
	{
$('#fonction').css('border-color','#ff0000');
return 0;
}
else
	{$('#fonction').css('border-color','#339900');
	return 1;
	}
}

function tel_c()
{
	if($('#tel_c').val()=="" ||!$("#tel_c").val().match(/^[0-9]{10}$/))
	{
$('#tel_c').css('border-color','#ff0000');
return 0;
}
else
	{$('#tel_c').css('border-color','#339900');
	return 1;
	}
}

function fax()
{
	if($('#fax').val()=="" ||!$("#fax").val().match(/^[0-9]{10}$/) )
	{
$('#fax').css('border-color','#ff0000');
return 0;
}
else
	{$('#fax').css('border-color','#339900');
	return 1;
	}
}

function departement()
{
	if($('#departement').val()=="" )
	{
$('#departement').css('border-color','#ff0000');
return 0;
}
else
	{$('#departement').css('border-color','#339900');
	return 1;
	}
}

function date_fin_c()
{
	if($('#date_fin_c').val()=="" )
	{
$('#date_fin_c').css('border-color','#ff0000');
return 0;
}
else
	{$('#date_fin_c').css('border-color','#339900');
	return 1;
	}
}

function niveau_c()
{
	if($('#niveau_c').val()=="" )
	{
$('#niveau_c').css('border-color','#ff0000');
return 0;
}
else
	{$('#niveau_c').css('border-color','#339900');
	return 1;
	}
}

function desc_c()
{
	if($('#desc_c').val()=="" )
	{
$('#desc_c').css('border-color','#ff0000');
return 0;
}
else
	{$('#desc_c').css('border-color','#339900');
	return 1;
	}
}

function desc_c()
{
	if($('#desc_c').val()=="" )
	{
$('#desc_c').css('border-color','#ff0000');
return 0;
}
else
	{$('#desc_c').css('border-color','#339900');
	return 1;
	}
}

function condition_c()
{
	if($('#condition_c').val()=="" )
	{
$('#condition_c').css('border-color','#ff0000');
return 0;
}
else
	{$('#condition_c').css('border-color','#339900');
	return 1;
	}
}

function lieu_c()
{
	if($('#lieu_c').val()=="" )
	{
$('#lieu_c').css('border-color','#ff0000');
return 0;
}
else
	{$('#lieu_c').css('border-color','#339900');
	return 1;
	}
}

function site_c()
{
	if($('#site_c').val()=="" )
	{
$('#site_c').css('border-color','#ff0000');
return 0;
}
else
	{$('#site_c').css('border-color','#339900');
	return 1;
	}
}


function condition_c()
{
	if($('#condition_c').val()=="" )
	{
$('#condition_c').css('border-color','#ff0000');
return 0;
}
else
	{$('#condition_c').css('border-color','#339900');
	return 1;
	}
}


//Verification instantanée avec jquery


$('#organisme_c').keyup(function(){
organisme_c();
})

$('#niveau_c').keyup(function(){
niveau_c();
})

$('#domaine_c').keyup(function(){
domaine_c();
})


$('#date_fin_c').keyup(function(){
date_fin_c();
})

$('#date_c').keyup(function(){
date_c();
})

$('#pieces_c').keyup(function(){
pieces_c();
})



$('#desc_c').keyup(function(){
desc_c();
})



$('#site_c').keyup(function(){
site_c();
})


$('#condition_c').keyup(function(){
condition_c();
})

$('#lieu_c').keyup(function(){
lieu_c();
})

$('#ville_c').keyup(function(){
ville_c();
})


$('#fonction').keyup(function(){
fonction();
})

$('#tel_c').keyup(function(){
tel_c();
})

$('#fax').keyup(function(){
fax();
})

$('#departement').keyup(function(){
departement();
})

$('#email_c').keyup(function(){
email_c();
})
$("#subc").click(function(){
	
				var f= document.getElementById("form_con");
					f.action="ajout_a_c.php";
					var c=organisme_c();
					var n=ville_c();
					var niv=niveau_c();
					var da=date_fin_c();
					var dac=date_c();
					var pi=pieces_c();
					var des=desc_c();
					var dom=domaine_c();
					var con=condition_c();
					var lie=lieu_c();
					var te=tel_c();
					var sit=site_c();
					var ema=email_c();
					if(c==1&&n==1&&da==1&&dac==1&&pi==1&&niv==1&&des==1&&dom==1&&con==1&&lie==1&&te==1&&sit==1&&ema==1)
					f.submit();
					else
					{alert("Veuillez remplire tous les champs correctement");}
					
})
})

