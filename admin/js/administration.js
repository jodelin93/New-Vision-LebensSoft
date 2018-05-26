function utilisateurFonc(varr){
// document.getElementById('titre').innerHTML = varr;
// var util = document.getElementById('listeUtilisateur');
// if (util.style.display=="none") {
// 	util.style.display="block";
// }
var i = 0;

// document.getElementById('enregistrementM').innerHTML = "";


   // document.getElementById('enregistrementM').innerHTML = corps;

   	$(document).ready(function (e) {
$("#utilForm").on('submit',(function(e) {
e.preventDefault();
$("#result").empty();
 
$.ajax({
	
url: "includes/insert.php", 
type: "POST",             
data: new FormData(this), 
contentType: false,       
cache: false,             
processData:false,       
success: function(data) 
 
{

if(data=="Enregistrement reussi"){

$("#error").html(data);

$('.messagec').modal('show');
//$('.').modal('hide');
//$("#viewlist").load();


//$("#viewsuc").fadeOut(3000);


}else{

$("#error").html(data);
//$("#viewwong").fadeIn(200);
$("#viewsuc").hide();
$('.messagec').modal('show');

}






}
});
}));



		
//$("#viewwong").hide();
//$("#viewsuc").hide();

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

}


function vider(){

document.getElementById('nom_util').value = "";
document.getElementById('id_emp').disabled = false;
document.getElementById('pwd').value = "";
document.getElementById('droit').disabled = false;
document.getElementById('etat').value = "";
document.getElementById('file').disabled = false;
document.getElementById('enreUtil').value = "";	
}
 


 function employerFonc(varr){
// document.getElementById('titre').innerHTML = varr;
var i = 0;
// document.getElementById('enregistrementM').innerHTML = "";


   // document.getElementById('enregistrementM').innerHTML = corps;
 	
$("#empForm").on('submit',(function(e) {
e.preventDefault();
$("#result").empty();
 
$.ajax({
	
url: "includes/insert.php", 
type: "POST",             
data: new FormData(this), 
contentType: false,       
cache: false,             
processData:false,       
success: function(data) 
 
{

if(data=="Enregistrement reussi"){

$("#error").html(data);
$('.messagec').modal('show');
//$('.').modal('hide');
//$("#viewlist").load();
vider();

//$("#viewsuc").fadeOut(3000);


}else{

$("#error").html(data);
//$("#viewwong").fadeIn(200);
$("#viewsuc").hide();
$('.messagec').modal('show');

}






}
});
}));
}


 function chambreFonc(varr){
// document.getElementById('titre').innerHTML = varr;
var i = 0;
$("#chmbForm").on('submit',(function(e) {
e.preventDefault();
$("#result").empty();
 
$.ajax({
	
url: "includes/insert.php", 
type: "POST",             
data: new FormData(this), 
contentType: false,       
cache: false,             
processData:false,       
success: function(data) 
 
{

if(data=="Enregistrement reussi"){

$("#error").html(data);
$('.messagec').modal('show');
//$('.').modal('hide');
//$("#viewlist").load();
vider();

//$("#viewsuc").fadeOut(3000);


}else{

$("#error").html(data);
//$("#viewwong").fadeIn(200);
$("#viewsuc").hide();
$('.messagec').modal('show');

}






}
});
}));
}
 
 function salleFonc(varr){
// document.getElementById('titre').innerHTML = varr;
var i = 0;
// document.getElementById('enregistrementM').innerHTML = "";
$("#salleForm").on('submit',(function(e) {
e.preventDefault();
$("#result").empty();
 
$.ajax({
	
url: "includes/insert.php", 
type: "POST",             
data: new FormData(this), 
contentType: false,       
cache: false,             
processData:false,       
success: function(data) 
 
{

if(data=="Enregistrement reussi"){

$("#error").html(data);
$('.messagec').modal('show');
//$('.').modal('hide');
//$("#viewlist").load();
vider();

//$("#viewsuc").fadeOut(3000);


}else{

$("#error").html(data);
//$("#viewwong").fadeIn(200);
$("#viewsuc").hide();
$('.messagec').modal('show');

}






}
});
}));
}

function piscineFonc(varr){

}
 

 function tauxFonc(varr){
 	
 	$("#tauxForm").on('submit',(function(e) {
e.preventDefault();
$("#result").empty();
 
$.ajax({
	
url: "includes/insert.php", 
type: "POST",             
data: new FormData(this), 
contentType: false,       
cache: false,             
processData:false,       
success: function(data) 
 
{

if(data=="Enregistrement reussi"){

$("#error").html(data);
$('.messagec').modal('show');
//$('.').modal('hide');
//$("#viewlist").load();
vider();

//$("#viewsuc").fadeOut(3000);


}else{

$("#error").html(data);
//$("#viewwong").fadeIn(200);
$("#viewsuc").hide();
$('.messagec').modal('show');

}
}
});
}));
 	 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("listeUtilisateur").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "includes/adminListe.php?table=" + table, true);
        xmlhttp.send();
}
 
function adminListe(table) {
  
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("listeUtilisateur").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "includes/adminListe.php?table=" + table, true);
        xmlhttp.send();
   
}

 
function empListe(table) {
  
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("listeEmployer").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "includes/adminListe.php?table=" + table, true);
        xmlhttp.send();
   
}

 function desactiveUtil(table, id) {
   
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("listeUtilisateur").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "includes/desactiveUtil.php?table=" + table + '&id=' + id, true);
        xmlhttp.send();
        // adminListe(table);
   
}

 function activeUtil(table, id) {
   
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("listeUtilisateur").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "includes/activeUtil.php?table=" + table + '&id=' + id, true);
        xmlhttp.send();
        // adminListe('utilisateur');
   
}


 function test() {
   		var table ="utilisateur";
   		var id = "Utilisateur";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("titre").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "includes/activeUtil.php?table=" + table + '&id=' + id, true);
        xmlhttp.send();
        // adminListe('utilisateur');
   
}



function resetPass(table, id) {
   
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("lock"+id).innerHTML = '<i class="fa fa-unlock"> </i>';
            }
        };
        xmlhttp.open("GET", "includes/resetPass.php?table=" + table + '&id=' + id, true);
        xmlhttp.send();
        // adminListe(table);
   
}

function editDroit(table, id, droit){
	// document.getElementById(''+id+'').innerHTML = `<a onclick="test()">klikem </a>`;
	 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("listeUtilisateur").innerHTML = this.responseText;
                // document.getElementById("modifierTitre").innerHTML = "Modifier";
            }
        };
        xmlhttp.open("GET", "includes/editDroit.php?table=" + table + '&id=' + id + '&droit=' + droit, true);
        xmlhttp.send();
        adminListe(table);
}


function editEmployer(table, id){
        $('#default').modal('show');
           // $('#default').modal('show');
     // var xmlhttp = new XMLHttpRequest();
     //    xmlhttp.onreadystatechange = function() {
     //        if (this.readyState == 4 && this.status == 200) {
     //            document.getElementById("listeUtilisateur").innerHTML = this.responseText;
     //            // document.getElementById("modifierTitre").innerHTML = "Modifier";
     //        }
     //    };
     //    xmlhttp.open("GET", "includes/editEmployer.php?table=" + table + '&id=' + id, true);
     //    xmlhttp.send();
        // adminListe(table);
}

function refresUser() {
$.ajax({
    url: "includes/Useronline.php", // Ton fichier ou se trouve ton chat
    success:
        function(retour){
        $('#userOnline').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
    }
});
 
}
setInterval("refresUser()", 1000);

