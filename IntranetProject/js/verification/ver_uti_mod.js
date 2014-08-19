$(document).ready(function(){
function nom(){
	if($('#nom').val()==""){
$('#nom').css('border-color','#ff0000');
//$('#nom').next('.error').fadeIn('fast').text('Entrer un nom valide.')
return 0;
}
else
	{
	$('#nom').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}	

function prenom()
{	
	if($('#prenom').val()=="")
{
$('#prenom').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#prenom').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}
function email()
{
if($('#email').val()=="" || !$('#email').val().match(/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/) )
{
$('#email').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#email').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}

function i()
{
if($('#i').val()=="")
{
$('#i').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#i').css('border-color','#339900');
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

function niveau()
{
	if($('#niveau').val()=="")
	{
$('#niveau').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le nom de l\'organisation!')
return 0;
}
else
	{$('#niveau').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function cpassword()
{
	if($('#cpassword').val()=="" || !($('#password').val()== $('#cpassword').val()))
	{
$('#cpassword').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le nom de l\'organisation!')
return 0;
}
else
	{$('#cpassword').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}


function secteur()
{
	if($('#secteur').val()=="")
	{
$('#secteur').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le nom de l\'organisation!')
return 0;
}
else
	{$('#secteur').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function fonction()
{
	if($('#fonction').val()=="")
	{
$('#fonction').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le nom de l\'organisation!')
return 0;
}
else
	{$('#fonction').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function tel()
{
	if($('#tel').val()=="" ||!$("#tel").val().match(/^[0-9]{10}$/))
	{
$('#tel').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le nom de l\'organisation!')
return 0;
}
else
	{$('#tel').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function fax()
{
	if($('#fax').val()=="" ||!$("#fax").val().match(/^[0-9]{10}$/) )
	{
$('#fax').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le nom de l\'organisation!')
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
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le nom de l\'organisation!')
return 0;
}
else
	{$('#departement').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function date()
{
	if($('#date').val()=="" )
	{
$('#date').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le nom de l\'organisation!')
return 0;
}
else
	{$('#date').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}
//Verification instantanée avec jquery

//****************************champ CNE*************************


$('#nom').keyup(function(){
nom();
})

$('#niveau').keyup(function(){
niveau();
})

$('#secteur').keyup(function(){
secteur();
})


$('#date').keyup(function(){
date();
})




//********************champ nom*********************************

$('#prenom').keyup(function(){
prenom();
})

//********************champ prenom*********************************


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

$('#tel').keyup(function(){
tel();
})

$('#fax').keyup(function(){
fax();
})

$('#departement').keyup(function(){
departement();
})
$("#subm").click(function(){
	
				var f= document.getElementById("form_rec");
					f.action="inserer_utilisateur.php";
					var c=nom();
					var n=prenom();
					var d=date();
					var p=email();
					var pa=password();
					var m=cpassword();
						
					var ii=fonction();
					
					
					if(c==1&&n==1&&p==1&&pa==1&&m==1&&ii==1&&d==1)
					f.submit();
					else
					{alert("Veuillez remplire tous les champs correctement");}
					
})
})

