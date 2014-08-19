$(document).ready(function(){
	function dated()
{	
	if($('#dated').val()=="")
{
$('#dated').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#dated').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}
function datef()
{
if($('#datef').val()=="")
	{
$('#datef').css('border-color','#ff0000');
//$('#datef').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{$('#datef').css('border-color','#339900');
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

function niveau()
{
	if($('#niveau').val()=="")
	{
$('#niveau').css('border-color','#ff0000');
//$('#niveau').next('.error').fadeIn('fast').text('Entrer le niveau!')
return 0;
}
else
	{$('#niveau').css('border-color','#339900');
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

function desc()
{
if($('#desc').val()=="")
	{
$('#desc').css('border-color','#ff0000');
//$('#desc').next('.error').fadeIn('fast').text('numéro non valide au Maroc!')
return 0;
}
else
	{$('#desc').css('border-color','#339900');
	//$('#desc').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}



//Verification instantanée avec jquery

//****************************champ CNE*************************


$('#dated').keyup(function(){
dated();
})


//********************champ nom*********************************

$('#datef').keyup(function(){
datef();
})

//********************champ prenom*********************************


$('#organisme').keyup(function(){
organisme();
})

//********************champ Email*********************************

$('#niveau').keyup(function(){
niveau();
})

//********************champ Téléphone*********************************

$('#lieu').keyup(function(){
lieu();
})

//********************champ adresse*********************************

$('#desc').keyup(function(){
desc();
})

$("#modif").click(function(){
	
				var f= document.getElementById("form");
					f.action="modifie_concours.php";
					var c=dated();
					var n=datef();
					var p=organisme();
					var m=niveau();
					var t=lieu();
					var a=desc();
					if(c==1&&n==1&&p==1&m==1&&t==1&&a==1)
					{f.submit();}
					else
					{alert("Veuillez remplire toutes les champs");}
})

})