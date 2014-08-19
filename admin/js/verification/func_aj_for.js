$(document).ready(function(){
	function desc()
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
function secteur()
{
if($('#secteura').val()=="")
	{
$('#secteura').css('border-color','#ff0000');
//$('#datef').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{$('#secteura').css('border-color','#339900');
	//$('#datef').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function organisme()
{
	if($('#organismea').val()=="")
	{
$('#organismea').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le nom de l\'organisation!')
return 0;
}
else
	{$('#organismea').css('border-color','#339900');
	//$('#organisme').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function nbr()
{
	if($('#nbra').val()=="")
	{
$('#nbra').css('border-color','#ff0000');
//$('#niveau').next('.error').fadeIn('fast').text('Entrer le niveau!')
return 0;
}
else
	{$('#nbra').css('border-color','#339900');
//	$('#niveau').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function lieu()
{
	if($('#lieua').val()=="")
	{
$('#lieua').css('border-color','#ff0000');
//$('#lieu').next('.error').fadeIn('fast').text('Le champ lieu est obligatoire!')
return 0;}
else
	{$('#lieua').css('border-color','#339900');
	//$('#lieu').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function duree()
{
if($('#dureea').val()=="")
	{
$('#dureea').css('border-color','#ff0000');
//$('#desc').next('.error').fadeIn('fast').text('numéro non valide au Maroc!')
return 0;
}
else
	{$('#dureea').css('border-color','#339900');
	//$('#desc').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}



//Verification instantanée avec jquery

//****************************champ CNE*************************


$('#desca').keyup(function(){
desc();
})


//********************champ nom*********************************

$('#secteura').keyup(function(){
secteur();
})

//********************champ prenom*********************************


$('#organismea').keyup(function(){
organisme();
})

//********************champ Email*********************************

$('#nbra').keyup(function(){
nbr();
})

//********************champ Téléphone*********************************

$('#lieua').keyup(function(){
lieu();
})

//********************champ adresse*********************************

$('#dureea').keyup(function(){
duree();
})

$("#ajout").click(function(){
				var f= document.getElementById("form_aj");
					f.action="ajout_f.php";
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