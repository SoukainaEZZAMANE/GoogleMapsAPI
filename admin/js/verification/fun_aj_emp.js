$(document).ready(function(){
	function entreprise_e()
{	
	if($('#entreprise_ea').val()=="")
{
$('#entreprise_ea').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#entreprise_ea').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}
function desc_entr_e()
{
if($('#desc_entr_ea').val()=="")
	{
$('#desc_entr_ea').css('border-color','#ff0000');
//$('#datef').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{$('#desc_entr_ea').css('border-color','#339900');
	//$('#datef').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function nbr_poste_e()
{
	if($('#nbr_poste_ea').val()=="")
	{
$('#nbr_poste_ea').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le nom de l\'organisation!')
return 0;
}
else
	{$('#nbr_poste_ea').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function lieu_e()
{
	if($('#lieu_ea').val()=="")
	{
$('#lieu_ea').css('border-color','#ff0000');
//$('#niveau').next('.error').fadeIn('fast').text('Entrer le niveau!')
return 0;
}
else
	{$('#lieu_ea').css('border-color','#339900');
//	$('#niveau').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function date_depot_e()
{
	if($('#date_depot_ea').val()=="")
	{
$('#date_depot_ea').css('border-color','#ff0000');
//$('#lieu').next('.error').fadeIn('fast').text('Le champ lieu est obligatoire!')
return 0;}
else
	{$('#date_depot_ea').css('border-color','#339900');
	//$('#lieu').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function secteur_e()
{
if($('#secteur_ea').val()=="")
	{
$('#secteur_ea').css('border-color','#ff0000');
//$('#desc').next('.error').fadeIn('fast').text('numéro non valide au Maroc!')
return 0;
}
else
	{$('#secteur_ea').css('border-color','#339900');
	//$('#desc').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function niveau_e()
{
if($('#niveau_ea').val()=="")
	{
$('#niveau_ea').css('border-color','#ff0000');
//$('#desc').next('.error').fadeIn('fast').text('numéro non valide au Maroc!')
return 0;
}
else
	{$('#niveau_ea').css('border-color','#339900');
	//$('#desc').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

//Verification instantanée avec jquery

//****************************champ CNE*************************


$('#entreprise_ea').keyup(function(){
entreprise_e();
})


//********************champ nom*********************************

$('#desc_entr_ea').keyup(function(){
desc_entr_e();
})

//********************champ prenom*********************************


$('#nbr_poste_ea').keyup(function(){
nbr_poste_e();
})

//********************champ Email*********************************

$('#lieu_ea').keyup(function(){
lieu_e();
})

//********************champ Téléphone*********************************

$('#date_depot_ea').keyup(function(){
date_depot_e();
})

//********************champ adresse*********************************

$('#secteur_ea').keyup(function(){
secteur_e();
})

$('#niveau_ea').keyup(function(){
niveau_e();
})

$("#ajout").click(function(){
	
				var f= document.getElementById("form_aj");
					f.action="ajout_emplois.php";
					var c=entreprise_e();
					var n=desc_entr_e();
					var p=nbr_poste_e();
					var m=lieu_e();
					var t=date_depot_e();
					var a=secteur_e();
					var b=niveau_e()
					if(c==1&&n==1&&p==1&m==1&&t==1&&a==1)
					{f.submit();}
					else
					{alert("Veuillez remplire toutes les champs");}
					
})
})