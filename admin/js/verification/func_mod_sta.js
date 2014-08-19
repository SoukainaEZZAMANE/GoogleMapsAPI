$(document).ready(function(){
	function desc_entr_s()
{	
	if($('#desc_entr_s').val()=="")
{
$('#desc_entr_s').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#desc_entr_s').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}
function niveau_s()
{
if($('#niveau_s').val()=="")
	{
$('#niveau_s').css('border-color','#ff0000');
//$('#datef').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{$('#niveau_s').css('border-color','#339900');
	//$('#datef').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function dure_s()
{
	if($('#dure_s').val()=="")
	{
$('#dure_s').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le nom de l\'organisation!')
return 0;
}
else
	{$('#dure_s').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function secteur_s()
{
	if($('#secteur_s').val()=="")
	{
$('#secteur_s').css('border-color','#ff0000');
//$('#niveau').next('.error').fadeIn('fast').text('Entrer le niveau!')
return 0;
}
else
	{$('#secteur_s').css('border-color','#339900');
//	$('#niveau').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function entreprise_s()
{
	if($('#entreprise_s').val()=="")
	{
$('#entreprise_s').css('border-color','#ff0000');
//$('#lieu').next('.error').fadeIn('fast').text('Le champ lieu est obligatoire!')
return 0;}
else
	{$('#entreprise_s').css('border-color','#339900');
	//$('#lieu').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function mission_s()
{
if($('#mission_s').val()=="")
	{
$('#mission_s').css('border-color','#ff0000');
//$('#desc').next('.error').fadeIn('fast').text('numéro non valide au Maroc!')
return 0;
}
else
	{$('#mission_s').css('border-color','#339900');
	//$('#desc').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

	function remunere()
{	
	if($('#remunere').val()=="")
{
$('#remunere').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#remunere').css('border-color','#339900');
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


function date_depot_s()
{	
	if($('#date_depot_s').val()=="")
{
$('#date_depot_s').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#date_depot_s').css('border-color','#339900');
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
//Verification instantanée avec jquery

//****************************champ CNE*************************


$('#desc_entr_s').keyup(function(){
desc_entr_s();
})


//********************champ nom*********************************

$('#niveau_s').keyup(function(){
niveau_s();
})

//********************champ prenom*********************************


$('#dure_s').keyup(function(){
dure_s();
})

//********************champ Email*********************************

$('#secteur_s').keyup(function(){
secteur_s();
})

//********************champ Téléphone*********************************

$('#entreprise_s').keyup(function(){
entreprise_s();
})

//********************champ adresse*********************************

$('#mission_s').keyup(function(){
mission_s();
})

$('#remunere').keyup(function(){
remunere();
})

	$('#nbr_poste').keyup(function(){
nbr_poste();
})

	$('#date_depot_s').keyup(function(){
date_depot_s();
})

	$('#demarrage_s').keyup(function(){
demarrage_s();
})

$("#modif").click(function(){
				var f= document.getElementById("form");
					f.action="modifie_stage.php";
					var c=desc_entr_s();
					var n=niveau_s();
					var p=dure_s();
					var m=secteur_s();
					var t=entreprise_s();
					var a=mission_s();
					var b=remunere();
					var e=nbr_poste();
					var g=date_depot_s();
					var h=demarrage_s();
					if(c==1&&n==1&&p==1&m==1&&t==1&&a==1&&b==1&&e==1&&g==1&&h==1)
					f.submit();
					else
					{alert("Veuillez remplire toutes les champs");}
})

})