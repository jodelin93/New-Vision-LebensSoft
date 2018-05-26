$(document).ready(function (e) {
$("#Insertdata").on('submit',(function(e) {
e.preventDefault();
$("#result").empty();
 
$.ajax({
	
url: "../../includes/enregistrement.php", 
type: "POST",             
data: new FormData(this), 
contentType: false,       
cache: false,             
processData:false,       
success: function(data) 
 
{

if(data=="Inscription reussie"){
$("#success").html(data);
$("#viewsuc").slideToggle(1000);
setTimeout(function(){window.location.reload();},5000);
$("#viewwong").hide();
document.getElementById('nom_bene').value = "";
document.getElementById('type_bene').value = "";
document.getElementById('prenom_bene').value = "";
document.getElementById('sexe_bene').value = "";
document.getElementById('dat_naiss_bene').value = "";
document.getElementById('adr_bene').value = "";
document.getElementById('etat_civil_bene').value = "";
document.getElementById('maison_bene').value = "";
document.getElementById('niveau_etude_bene').value = "";
document.getElementById('info_sup_bene').value = "";
document.getElementById('etat_sante_bene').value = "";
document.getElementById('logement_bene').value = "";
document.getElementById('nifcin').value = "";
document.getElementById('nom_parent').value = "";


$('#modal-default').modal('hide');
$("#viewsuc").fadeOut(3000);

$("#viewlistll").load("inscripstion.php",function(response, status) { 
		  if (status == "success") { 
			  $(this).html(response);
		  }else if(status == "error") {
			  alert('erreur !');
		  }
		});
}else{

$("#error").html(data);
$("#viewwong").slideToggle(3000);
$("#viewsuc").hide();


}




}
});
}));

$("#Insertdata").on('mouseover',(function(e) {

}));

$("#viewlist").load("inscripstion.php",function(response, status) { 
		  if (status == "success") { 
			  $(this).html(response);
		  }else if(status == "error") {
			  alert('erreur !');
		  }
		});
$("#viewwong").hide();
$("#viewsuc").hide();
$(function() {
$("#file").change(function() {
$("#message").empty(); 
var file = this.files[0];
var imagefile = file.type;
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
$('#previewing').attr('src','../../avatars/ava.png');
$("#message").html("Le format de votre image est invalid</p>"+"<h4>NB:</h4>"+"<span id=''>Seulement jpeg, jpg et png</span>");
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);

}
});
});
function imageIsLoaded(e) {
$("#file").css("color","green");
$('#image_preview').css("display", "inline");
$('#previewing').attr('src', e.target.result);

};
});