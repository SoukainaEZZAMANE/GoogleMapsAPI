$(document).ready(function(){
	function dated()
{	
	if($('#dateda').val()=="")
{
$('#dateda').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{
	$('#dateda').css('border-color','#339900');
	//$('#dated').next('.error').fadeIn('fast').text('OK')
	return 1; 
	}
	
}
function datef()
{
if($('#datefa').val()=="")
	{
$('#datefa').css('border-color','#ff0000');
//$('#datef').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
	{$('#datefa').css('border-color','#339900');
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

function niveau()
{
	if($('#niveaua').val()=="")
	{
$('#niveaua').css('border-color','#ff0000');
//$('#niveau').next('.error').fadeIn('fast').text('Entrer le niveau!')
return 0;
}
else
	{$('#niveaua').css('border-color','#339900');
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

function desc()
{
if($('#desca').val()=="")
	{
$('#desca').css('border-color','#ff0000');
//$('#desc').next('.error').fadeIn('fast').text('num�ro non valide au Maroc!')
return 0;
}
else
	{$('#desca').css('border-color','#339900');
	//$('#desc').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}

function email()
{
if(!$('#emaila').val().match(/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/) ||  $('#emaila').val()=="")
	{
$('#emaila').css('border-color','#ff0000');
//$('#desc').next('.error').fadeIn('fast').text('num�ro non valide au Maroc!')
return 0;
}
else
	{$('#emaila').css('border-color','#339900');
	//$('#desc').next('.error').fadeIn('fast').text('OK')
	return 1;
	}
}


//Verification instantan�e avec jquery

//****************************champ CNE*************************


$('#dateda').keyup(function(){
dated();
})


//********************champ nom*********************************

$('#datefa').keyup(function(){
datef();
})

//********************champ prenom*********************************


$('#organismea').keyup(function(){
organisme();
})

//********************champ Email*********************************

$('#niveaua').keyup(function(){
niveau();
})

//********************champ T�l�phone*********************************

$('#lieua').keyup(function(){
lieu();
})

//********************champ adresse*********************************

$('#desca').keyup(function(){
desc();
})

/*$('#emaila').keyup(function(){
email();
})
*/
$("#ajout").click(function(){
	
				var f= document.getElementById("form_aj");
					f.action="ajout.php";
					var c=dated();
					var n=datef();
					var p=organisme();
					var m=niveau();
					var t=lieu();
					var a=desc();
					//var e=email()
					if(c==1&&n==1&&p==1&m==1&&t==1&&a==1)
					{f.submit();}
					else
					{alert("Veuillez remplire toutes les champs");}
					
})
})