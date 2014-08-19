$(document).ready(function(){
	function desc_entr_s()
{	
	if($('#desca').val()=="")
{
$('#desca').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#desca').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}
function niveau_s()
{
if($('#niveau_sa').val()=="")
	{
$('#niveau_sa').css('border-color','#ff0000');
//$('#datef').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{$('#niveau_sa').css('border-color','#339900');
	//$('#datef').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function dure_s()
{
	if($('#dure_sa').val()=="")
	{
$('#dure_sa').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le nom de l\'organisation!')
return 0;
}
else
	{$('#dure_sa').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function secteur_s()
{
	if($('#secteur_sa').val()=="")
	{
$('#secteur_sa').css('border-color','#ff0000');
//$('#niveau').next('.error').fadeIn('fast').text('Entrer le niveau!')
return 0;
}
else
	{$('#secteur_sa').css('border-color','#339900');
//	$('#niveau').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function entreprise_s()
{
	if($('#entreprise_sa').val()=="")
	{
$('#entreprise_sa').css('border-color','#ff0000');
//$('#lieu').next('.error').fadeIn('fast').text('Le champ lieu est obligatoire!')
return 0;}
else
	{$('#entreprise_sa').css('border-color','#339900');
	//$('#lieu').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function mission_s()
{
if($('#missiona').val()=="")
	{
$('#missiona').css('border-color','#ff0000');
//$('#desc').next('.error').fadeIn('fast').text('numéro non valide au Maroc!')
return 0;
}
else
	{$('#missiona').css('border-color','#339900');
	//$('#desc').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

	function remunere()
{	
	if($('#remunerea').val()=="")
{
$('#remunerea').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#remunerea').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}
	function nbr_poste()
{	
	if($('#nbra').val()=="")
{
$('#nbra').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#nbra').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}


function date_depot_s()
{	
	if($('#datea').val()=="")
{
$('#datea').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#datea').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}

function demarrage_s()
{	
	if($('#demarragea').val()=="")
{
$('#demarragea').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#demarragea').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
/*function lieu()
{	
	if($('#lieua').val()=="")
{
$('#lieua').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#lieua').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}*/
}


//Verification instantanée avec jquery

//****************************champ CNE*************************


$('#desca').keyup(function(){
desc_entr_s();
})


//********************champ nom*********************************

$('#niveau_sa').keyup(function(){
niveau_s();
})

//********************champ prenom*********************************


$('#dure_sa').keyup(function(){
dure_s();
})

//********************champ Email*********************************

$('#secteur_sa').keyup(function(){
secteur_s();
})

//********************champ Téléphone*********************************

$('#entreprise_sa').keyup(function(){
entreprise_s();
})

//********************champ adresse*********************************

$('#missiona').keyup(function(){
mission_s();
})

$('#remunerea').keyup(function(){
remunere();
})

	$('#nbra').keyup(function(){
nbr_poste();
})

	$('#datea').keyup(function(){
date_depot_s();
})

	$('#demarragea').keyup(function(){
demarrage_s();
})
	/*
		$('#lieua').keyup(function(){
lieu();
})
*/
$("#ajout").click(function(){
				var f= document.getElementById("form_aj");
					f.action="ajout_stage.php";
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
					//var l=lieu();
					if(c==1&&n==1&&p==1&m==1&&t==1&&a==1&&b==1&&e==1&&g==1&&h==1)
					f.submit();
					else
					{alert("Veuillez remplire toutes les champs");}
})

})