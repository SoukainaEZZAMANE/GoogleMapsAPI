$(document).ready(function(){
	function desc()
{	
	if($('#desc').val()=="")
{
$('#desc').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#desc').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}
function secteur()
{
if($('#secteur').val()=="")
	{
$('#secteur').css('border-color','#ff0000');
//$('#datef').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{$('#secteur').css('border-color','#339900');
	//$('#datef').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function organisme()
{
	if($('#organisme').val()=="")
	{
$('#organisme').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le nom de l\'organisation!')
return 0;
}
else
	{$('#organisme').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function nbr()
{
	if($('#nbr').val()=="")
	{
$('#nbr').css('border-color','#ff0000');
//$('#niveau').next('.error').fadeIn('fast').text('Entrer le niveau!')
return 0;
}
else
	{$('#nbr').css('border-color','#339900');
//	$('#niveau').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function lieu()
{
	if($('#lieu').val()=="")
	{
$('#lieu').css('border-color','#ff0000');
//$('#lieu').next('.error').fadeIn('fast').text('Le champ lieu est obligatoire!')
return 0;}
else
	{$('#lieu').css('border-color','#339900');
	//$('#lieu').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function duree()
{
if($('#duree').val()=="")
	{
$('#duree').css('border-color','#ff0000');
//$('#desc').next('.error').fadeIn('fast').text('numéro non valide au Maroc!')
return 0;
}
else
	{$('#duree').css('border-color','#339900');
	//$('#desc').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}



//Verification instantanée avec jquery

//****************************champ CNE*************************


$('#desc').keyup(function(){
desc();
})


//********************champ nom*********************************

$('#secteur').keyup(function(){
secteur();
})

//********************champ prenom*********************************


$('#organisme').keyup(function(){
organisme();
})

//********************champ Email*********************************

$('#nbr').keyup(function(){
nbr();
})

//********************champ Téléphone*********************************

$('#lieu').keyup(function(){
lieu();
})

//********************champ adresse*********************************

$('#duree').keyup(function(){
duree();
})

$("#modif").click(function(){
	
				var f= document.getElementById("form");
					f.action="modifie_formations.php";
					var c=desc();
					var n=secteur();
					var p=organisme();
					var m=nbr();
					var t=lieu();
					var a=duree();
					if(c==1&&n==1&&p==1&m==1&&t==1&&a==1)
					{f.submit();}
					else
					{alert("Veuillez remplire toutes les champs");}
})

})