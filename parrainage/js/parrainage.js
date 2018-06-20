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
$("#msgInsertionParrain").html(data);
$('#msgModal').modal('show');
// document.getElementById("messenrthh").value =""+data+"";
// var gs=document.getElementById("messenrthh").value;
//alert(gs);
var hg = html(data);
alert(hg);
if(data=="Enregistrement Reussi"){
// $("#errorrr").html("enregistrement reussi");	
vider();
}
else{
	// $("#errorrr").html(data);
}

}
});
}));




$("#formajouterlettre").on('submit',(function(e) {
    e.preventDefault();       
    $.ajax({
        
    url: "includes/insertLettre.php", 
    type: "POST",             
    data: new FormData(this), 
    contentType: false,       
    cache: false,             
    processData:false,       
    success: function(data){
      if(data=="Enregistrement Reussi"){
        $("#formajouterlettre").value="";
        conversation();
      }

    $("#msgLettreRep").html(data);
    
     }
    });
    }));

    function conversation(){
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status == 200){
          document.getElementById('listeConversationAjax').innerHTML=this.responseText;
        }
      }
      xmlhttp.open("GET", "includes/conversationAjax.php", true);
      xmlhttp.send();
    }

// $('#tabs a[href="#tab_2"]').tab('show');
});


$("#tabP").click(function(){

       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("listeParrainAjax").innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET", "includes/pageAjax.php", true);
        xmlhttp.send();

     
    }); 


// listParrain();

  
