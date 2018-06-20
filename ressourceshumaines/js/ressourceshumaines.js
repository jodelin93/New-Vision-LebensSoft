$(document).ready(function (e) {
$("#presenceForm").on('submit',(function(e) {
    e.preventDefault(); 
    
    // $('#presenceForm')[0].reset();      
    $.ajax({
        
    url: "fonctions/insertPresence.php", 
    type: "POST",             
    data: new FormData(this), 
    contentType: false,       
    cache: false,             
    processData:false,       
    success: function(data){
      if(data=="Enregistrement Reussi"){
        // $("#formajouterlettre").value="";
        $('#presenceForm')[0].reset();
        // conversation();
        // nombreHeure();
      }
$('#errrrrrrrrrr').html(data);
    $("#msgModal").modal('show');
    
     }
    });
    }));
// nombreHeure();

  
});