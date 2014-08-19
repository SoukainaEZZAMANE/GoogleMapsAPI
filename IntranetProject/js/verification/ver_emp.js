$(document).ready(function(){
function entreprise_e(){
if($('#entreprise_e').val()==""){
$('#entreprise_e').css('border-color','#ff0000');
//$('#entreprise_e').next('.error').fadeIn('fast').text('Entrer un entreprise_e valide.')
return 0;
}
else
{
$('#entreprise_e').css('border-color','#339900');
//$('#dated').next('.error').fadeIn('fast').text('OK')
return 1; 
}

}
function ville_e()
{	
if($('#ville_e').val()=="")
{
$('#ville_e').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
{
$('#ville_e').css('border-color','#339900');
//$('#dated').next('.error').fadeIn('fast').text('OK')
return 1; 
}

}
function email_e()
{
if($('#email_e').val()=="" || !$('#email_e').val().match(/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/) )
{
$('#email_e').css('border-color','#ff0000');
//$('#dated').next('.error').fadeIn('fast').text('Entrer une date sous forme de YYYY-MM-DD')
return 0;
}
else
{
$('#email_e').css('border-color','#339900');
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
function niveau_e()
{
if($('#niveau_e').val()=="")
{
$('#niveau_e').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#niveau_e').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
function cpassword()
{
if($('#cpassword').val()=="" || !($('#password').val()== $('#cpassword').val()))
{
$('#cpassword').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#cpassword').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
function domaine_c()
{
if($('#domaine_c').val()=="")
{
$('#domaine_c').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#domaine_c').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
function fonction()
{
if($('#fonction').val()=="")
{
$('#fonction').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#fonction').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
function tel_e()
{
if($('#tel_e').val()=="" ||!$("#tel_e").val().match(/^[0-9]{10}$/))
{
$('#tel_e').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#tel_e').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
function fax()
{
if($('#fax').val()=="" ||!$("#fax").val().match(/^[0-9]{10}$/) )
{
$('#fax').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
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
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
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
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#date_fin_c').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
function niveau_e()
{
if($('#niveau_e').val()=="" )
{
$('#niveau_e').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#niveau_e').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
function desc_entr_e()
{
if($('#desc_entr_e').val()=="" )
{
$('#desc_entr_e').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#desc_entr_e').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
function secteur_e()
{
if($('#secteur_e').val()=="" )
{
$('#secteur_e').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#secteur_e').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
function nbr_poste_e()
{
if($('#nbr_poste_e').val()=="" )
{
$('#nbr_poste_e').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#nbr_poste_e').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
function lieu_e()
{
if($('#lieu_e').val()=="" )
{
$('#lieu_e').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#lieu_e').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
function site_e()
{
if($('#site_e').val()=="" )
{
$('#site_e').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#site_e').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
function nbr_poste_e()
{
if($('#nbr_poste_e').val()=="" )
{
$('#nbr_poste_e').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#nbr_poste_e').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
function type_contrat_e()
{
if($('#type_contrat_e').val()=="" )
{
$('#type_contrat_e').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#type_contrat_e').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
function renumeration_e()
{
if($('#renumeration_e').val()=="" )
{
$('#renumeration_e').css('border-color','#ff0000');
//$('#organisme').next('.error').fadeIn('fast').text('Entrer le entreprise_e de l\'organisation!')
return 0;
}
else
{$('#renumeration_e').css('border-color','#339900');
//$('#organisme').next('.error').fadeIn('fast').text('OK')
return 1;
}
}
//Verification instantanée avec jquery
//****************************champ CNE*************************
$('#entreprise_e').keyup(function(){
entreprise_e();
})
$('#renumeration_e').keyup(function(){
renumeration_e();
})
$('#niveau_e').keyup(function(){
niveau_e();
})
$('#secteur_e').keyup(function(){
secteur_e();
})
$('#date_fin_c').keyup(function(){
date_fin_c();
})
$('#date_c').keyup(function(){
date_c();
})
$('#pieces_c').keyup(function(){
pieces_c();
})
$('#desc_entr_e').keyup(function(){
desc_entr_e();
})
$('#desc_entr_e').keyup(function(){
desc_entr_e();
})
$('#site_e').keyup(function(){
site_e();
})
$('#nbr_poste_e').keyup(function(){
nbr_poste_e();
})
$('#lieu_e').keyup(function(){
lieu_e();
})
$('#type_contrat_e').keyup(function(){
type_contrat_e();
})
//********************champ entreprise_e*********************************
$('#ville_e').keyup(function(){
ville_e();
})
//********************champ ville_e*********************************
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
$('#tel_e').keyup(function(){
tel_e();
})
$('#fax').keyup(function(){
fax();
})
$('#departement').keyup(function(){
departement();
})
$('#email_e').keyup(function(){
email_e();
})
$("#sube").click(function(){

var f= document.getElementById("form_emp");
f.action="ajout_a_e.php";
var c=entreprise_e();
var n=ville_e();
var niv=niveau_e();
var da=date_fin_c();
var dac=date_c();
var pi=pieces_c();
var ni=niveau_e();
var des=desc_entr_e();
var dom=secteur_e();
var con=nbr_poste_e();
var lie=lieu_e();
var te=tel_e();
var sit=site_e();
var ema=email_e();
var tc=type_contrat_e();
var re=renumeration_e();
if(c==1&&n==1&&da==1&&dac==1&&pi==1&&niv==1&&des==1&&dom==1&&con==1&&lie==1&&te==1&&sit==1&&ema==1&&tc==1&&re==1)
f.submit();
else
{alert("Veuillez remplire tous les champs correctement");}

})
})