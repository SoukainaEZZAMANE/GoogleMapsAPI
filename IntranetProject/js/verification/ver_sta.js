$(document).ready(function(){
function entreprise_s(){
	if($('#entreprise_s').val()==""){
$('#entreprise_s').css('border-color','#ff0000');
//$('#entreprise_s').next('.error').fadeIn('fast').text('Entrer un entreprise_s valide.')
return 0;
}
else
	{
	$('#entreprise_s').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}	

function ville_s()
{	
	if($('#ville_s').val()=="")
{
$('#ville_s').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#ville_s').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}
function email_s()
{
if($('#email_s').val()=="" || !$('#email_s').val().match(/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/) )
{
$('#email_s').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#email_s').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}

function demarrage_s()
{
if($('#demarrage_s').val()=="")
{
$('#demarrage_s').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#demarrage_s').css('border-color','#339900');
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

function nbr_poste()
{
if($('#nbr_poste').val()=="")
{
$('#nbr_poste').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#nbr_poste').css('border-color','#339900');
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

function niveau_s()
{
	if($('#niveau_s').val()=="")
	{
$('#niveau_s').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#niveau_s').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function cpassword()
{
	if($('#cpassword').val()=="" || !($('#password').val()== $('#cpassword').val()))
	{
$('#cpassword').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#cpassword').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}


function secteur_s()
{
	if($('#secteur_s').val()=="")
	{
$('#secteur_s').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#secteur_s').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function fonction()
{
	if($('#fonction').val()=="")
	{
$('#fonction').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#fonction').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function tel_s()
{
	if($('#tel_s').val()=="" ||!$("#tel_s").val().match(/^[0-9]{10}$/))
	{
$('#tel_s').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#tel_s').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function fax()
{
	if($('#fax').val()=="" ||!$("#fax").val().match(/^[0-9]{10}$/) )
	{
$('#fax').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
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
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#departement').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function demarrage_s()
{
	if($('#demarrage_s').val()=="" )
	{
$('#demarrage_s').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#demarrage_s').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function niveau_s()
{
	if($('#niveau_s').val()=="" )
	{
$('#niveau_s').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#niveau_s').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function desc_entr_s()
{
	if($('#desc_entr_s').val()=="" )
	{
$('#desc_entr_s').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#desc_entr_s').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function resp_f()
{
	if($('#resp_f').val()=="" )
	{
$('#resp_f').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#resp_f').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function dure_s()
{
	if($('#dure_s').val()=="" )
	{
$('#dure_s').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#dure_s').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function lieu_s()
{
	if($('#lieu_s').val()=="" )
	{
$('#lieu_s').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#lieu_s').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function site_s()
{
	if($('#site_s').val()=="" )
	{
$('#site_s').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#site_s').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}


function dure_s()
{
	if($('#dure_s').val()=="" )
	{
$('#dure_s').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#dure_s').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function remunere()
{
	if($('#remunere').val()=="" )
	{
$('#remunere').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#remunere').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function mission_s()
{
	if($('#mission_s').val()=="" )
	{
$('#mission_s').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_s de l\'organisation!')
return 0;
}
else
	{$('#mission_s').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}
//Verification instantanée avec jquery

//****************************champ CNE*************************


$('#nbr_poste').keyup(function(){
nbr_poste();
})

$('#mission_s').keyup(function(){
mission_s();
})

$('#remunere').keyup(function(){
remunere();
})

$('#entreprise_s').keyup(function(){
entreprise_s();
})

$('#niveau_s').keyup(function(){
niveau_s();
})

$('#secteur_s').keyup(function(){
secteur_s();
})


$('#demarrage_s').keyup(function(){
demarrage_s();
})

$('#entreprise_s').keyup(function(){
entreprise_s();
})

$('#date_c').keyup(function(){
date_c();
})

$('#resp_f').keyup(function(){
resp_f();
})



$('#desc_entr_s').keyup(function(){
desc_entr_s();
})



$('#site_s').keyup(function(){
site_s();
})


$('#dure_s').keyup(function(){
dure_s();
})

$('#lieu_s').keyup(function(){
lieu_s();
})
//********************champ entreprise_s*********************************

$('#ville_s').keyup(function(){
ville_s();
})

//********************champ ville_s*********************************


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

$('#tel_s').keyup(function(){
tel_s();
})

$('#fax').keyup(function(){
fax();
})

$('#departement').keyup(function(){
departement();
})

$('#email_s').keyup(function(){
email_s();
})

$('#nbr_poste').keyup(function(){
nbr_poste();
})
$("#subs").click(function(){
	
				var f= document.getElementById("form1");
					f.action="ajout_a_s.php";
					var rem=remunere();
					var c=entreprise_s();
					var n=ville_s();
					var niv=niveau_s();
					var da=demarrage_s();
					var dac=mission_s();
					var pi=nbr_poste();
					var des=desc_entr_s();
					var dom=secteur_s();
					var con=dure_s();
					var lie=lieu_s();
					var te=tel_s();
					var sit=site_s();
					var ema=email_s();
					if(c==1&&n==1&&da==1&&dac==1&&pi==1&&niv==1&&des==1&&dom==1&&con==1&&lie==1&&te==1&&sit==1&&ema==1&&rem==1)
					f.submit();
					else
					{alert("Veuillez remplire tous les champs correctement");}
					
})
})

