$(document).ready(function(){
function organisation_f(){
	if($('#organisation_f').val()==""){
$('#organisation_f').css('border-color','#ff0000');
//$('#organisation_f').next('.error').fadeIn('fast').text('Entrer un organisation_f valide.')
return 0;
}
else
	{
	$('#organisation_f').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}	

function ville_f()
{	
	if($('#ville_f').val()=="")
{
$('#ville_f').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#ville_f').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}
function email_f()
{
if($('#email_f').val()=="" || !$('#email_f').val().match(/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/) )
{
$('#email_f').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#email_f').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}

function date_fin_c()
{
if($('#date_fin_c').val()=="")
{
$('#date_fin_c').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#date_fin_c').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}

function date_c()
{
if($('#date_c').val()=="")
{
$('#date_c').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#date_c').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}

function nbr_poste_f()
{
if($('#nbr_poste_f').val()=="")
{
$('#nbr_poste_f').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#nbr_poste_f').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}

function pieces_c()
{
if($('#pieces_c').val()=="")
{
$('#pieces_c').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#pieces_c').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}

function password()
{
if($('#password').val()=="")
	{
$('#password').css('border-color','#ff0000');
//$('#datef').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{$('#password').css('border-color','#339900');
	//$('#datef').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function niveau_f()
{
	if($('#niveau_f').val()=="")
	{
$('#niveau_f').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#niveau_f').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function cpassword()
{
	if($('#cpassword').val()=="" || !($('#password').val()== $('#cpassword').val()))
	{
$('#cpassword').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#cpassword').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}


function secteur_f()
{
	if($('#secteur_f').val()=="")
	{
$('#secteur_f').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#secteur_f').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function fonction()
{
	if($('#fonction').val()=="")
	{
$('#fonction').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#fonction').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function tel_f()
{
	if($('#tel_f').val()=="" ||!$("#tel_f").val().match(/^[0-9]{10}$/))
	{
$('#tel_f').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#tel_f').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function fax()
{
	if($('#fax').val()=="" ||!$("#fax").val().match(/^[0-9]{10}$/) )
	{
$('#fax').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#fax').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function departement()
{
	if($('#departement').val()=="" )
	{
$('#departement').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#departement').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function date_fin_c()
{
	if($('#date_fin_c').val()=="" )
	{
$('#date_fin_c').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#date_fin_c').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function niveau_f()
{
	if($('#niveau_f').val()=="" )
	{
$('#niveau_f').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#niveau_f').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function desc_f()
{
	if($('#desc_f').val()=="" )
	{
$('#desc_f').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#desc_f').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function resp_f()
{
	if($('#resp_f').val()=="" )
	{
$('#resp_f').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#resp_f').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function dure_f()
{
	if($('#dure_f').val()=="" )
	{
$('#dure_f').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#dure_f').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function lieu_f()
{
	if($('#lieu_f').val()=="" )
	{
$('#lieu_f').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#lieu_f').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function site_f()
{
	if($('#site_f').val()=="" )
	{
$('#site_f').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#site_f').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}


function dure_f()
{
	if($('#dure_f').val()=="" )
	{
$('#dure_f').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le organisation_f de l\'organisation!')
return 0;
}
else
	{$('#dure_f').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}
//Verification instantanée avec jquery

//****************************champ CNE*************************


$('#nbr_poste_f').keyup(function(){
nbr_poste_f();
})

$('#organisation_f').keyup(function(){
organisation_f();
})

$('#niveau_f').keyup(function(){
niveau_f();
})

$('#secteur_f').keyup(function(){
secteur_f();
})


$('#date_fin_c').keyup(function(){
date_fin_c();
})

$('#organisation_f').keyup(function(){
organisation_f();
})

$('#date_c').keyup(function(){
date_c();
})

$('#resp_f').keyup(function(){
resp_f();
})



$('#desc_f').keyup(function(){
desc_f();
})



$('#site_f').keyup(function(){
site_f();
})


$('#dure_f').keyup(function(){
dure_f();
})

$('#lieu_f').keyup(function(){
lieu_f();
})
//********************champ organisation_f*********************************

$('#ville_f').keyup(function(){
ville_f();
})

//********************champ ville_f*********************************


$('#email').keyup(function(){
email();
})

//********************champ Email*********************************

$('#password').keyup(function(){
password();
})

//********************champ Téléphone*********************************

$('#cpassword').keyup(function(){
cpassword();
})

$('#fonction').keyup(function(){
fonction();
})

$('#tel_f').keyup(function(){
tel_f();
})

$('#fax').keyup(function(){
fax();
})

$('#departement').keyup(function(){
departement();
})

$('#email_f').keyup(function(){
email_f();
})

$('#nbr_poste_f').keyup(function(){
nbr_poste_f();
})
$("#subf").click(function(){
	
				var f= document.getElementById("form");
					f.action="ajout_a_f.php";
					var c=organisation_f();
					var n=ville_f();
					var niv=niveau_f();
					var da=date_fin_c();
					var dac=date_c();
					var pi=nbr_poste_f();
					var des=desc_f();
					var dom=secteur_f();
					var con=dure_f();
					var lie=lieu_f();
					var te=tel_f();
					var sit=site_f();
					var ema=email_f();
					if(c==1&&n==1&&da==1&&dac==1&&pi==1&&niv==1&&des==1&&dom==1&&con==1&&lie==1&&te==1&&sit==1&&ema==1)
					f.submit();
					else
					{alert("Veuillez remplire tous les champs correctement");}
					
})
})

