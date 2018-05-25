$(document).ready(function (e) {
	// parrainListe();
	

$("#insererParrain").on('submit',(function(e) {
e.preventDefault();
$("#result").empty();
$.ajax({
	
url: "includes/insert.php", 
type: "POST",             
data: new FormData(this), 
contentType: false,       
cache: false,             
processData:false,       
success: function(data){
//var ui=""+data+"";
// document.getElementById('result').value =data;
// if(document.getElementById('result').value=="Enregistrement Reussie"){
//$("#messenrt").html("enregistrement reussi");	
$('#tabs a[href="#tab_2"]').tab('show');
// parrainListe();
vider();
// }
// else{
	// $("#messenrt").html(data);
// }
}
});
}));




function vider(){
	document.getElementById('nom_par').value = "";
	document.getElementById('prenom_par').value = "";
	document.getElementById('adresse_par').value = "";
	document.getElementById('sexe').value = "";
	document.getElementById('telephone').value = "";
	document.getElementById('email').value = "";
	document.getElementById('profession').value = "";
	document.getElementById('etat_civil').value = "";
	document.getElementById('nationalite').value = "";
	
}


$("#tab_2").click(function(){

       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("listeparrain").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "includes/listerParrain.php", true);
        xmlhttp.send();

     
    }); 

});

  
