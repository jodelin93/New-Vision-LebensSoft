<?php
include_once("../../class/Core.php");

            $core=new Core();
            $condParrain = "idParrain='".$_GET['idParrain']."'";
          $info = $core->selectData('parrain', NULL, $condParrain, NULL, NULL);
          foreach ($info as $ligne) {
           $nom_par = $ligne->nom_par;
           $prenom_par = $ligne->prenom_par;
           $adresse_par = $ligne->adresse_par;
           $sexe = $ligne->sexe;
           $telephone = $ligne->telephone;
           $email = $ligne->email;
           $profession = $ligne->profession;
           $etat_civil = $ligne->etat_civil;
           $nationalite = $ligne->nationalite;
           $photo_parrain = $ligne->photo_parrain;
           
          }
?>
<form method="post" id="modifierParrainform" class="form-element"  enctype="multipart/form-data">
	  <!-- left column -->
       <fieldset>
          <div class="col-lg-6">
           
            <!-- /.box-header -->
            <!-- form start -->
        
              <div class="box-body">
                <div class="form-group">
                  <label for="">Prenom</label>
                  <input type="hidden" value="<?= $_GET['idParrain'] ?>" name="idParrain">
                  <input type="text" class="form-control" value="<?= $prenom_par ?>" name="prenom_par" placeholder="Entrer le Prenom" required>
                </div>
                <div class="form-group">
                  <label for="">Nom</label>
                  <input type="text" class="form-control" value="<?= $nom_par ?>" name="nom_par" placeholder="Entrer le Nom" required>
                </div>
                <div class="form-group">
                  <label for="">Telephone</label>
                  <input type="text" class="form-control" value="<?= $telephone ?>" name="telephone" placeholder="Entrer le Numero de Telephone" required>
                </div>
                <div class="form-group">
                  <label for="">Sexe</label>
                 <select class="form-control" name="sexe" required="">
                 	<option><?= $sexe ?></option>
                 	<option>Feminin</option>
                 	<option>Masculin</option>
                 </select>
                </div>
                 <div class="form-group">
                  <label for="">Pays</label>
	                 <select class="form-control" name="nationalite" required>
	                 	<option><?= $nationalite ?></option>
                    <?php
                    $pays = $core->selectData("country", NULL, NULL, NULL, NULL);
                    foreach ($pays as $key) {
                  ?>
	                 	<option><?= $key->nicename ?></option>
                    <?php
                  }
                  ?>
	                 </select>
                </div>
                 <div class="form-group">
                  <label for="">Profession</label>
                <input type="text" class="form-control" name="profession" value="<?= $profession ?>" placeholder="Entrer la Profession">
                 
                </div>

              
              </div>
              <!-- /.box-body -->

            
          </div>
           <div class="col-lg-6">
               
            <div class="box-body box-profile">
              <label for="img" class="img-responsive">
              <img id="changeimg" class="profile-user-img img-responsive img-circle" src="../../avatars/<?= $photo_parrain ?>" id="previewpro">
              </label>
            </div>
             
            <!-- /.box-header -->
            <!-- form start -->
        
              <div class="box-body">
                
                <div class="form-group">
                  <label for="">E-Mail</label>
                  <input type="email" class="form-control" name="email" value="<?= $email ?>" placeholder="Saisir l'e-mail">
                </div>
                 <div class="form-group">
                  <label for="">Etat Civil</label>
                  <select value="<?= $etat_civil ?>" name="etat_civil" class="form-control" >
                    <option selected><?php echo $etat_civil; ?></option>
                    <option>Celibataire</option>
                    <option>Marie(e)</option>
                    <option>Divorce(e)</option>
                    <option>Veuf(ve)</option>
                  </select>
                  
                </div>
                 <div class="form-group">
                  <label for="">Adresse</label>
                  <input type="text" class="form-control" value="<?= $adresse_par ?>" name="adresse_par" placeholder="Saisir l'Adresse">
                </div>
                <div class="form-group">
                  <input type="hidden" value="<?= $photo_parrain ?>" name="photovalue">
                  <input type="file" onchange="chanjeimaj()" class="form-control" value="<?= $photo_parrain ?>" name="file" placeholder="Saisir l'Adresse" style="display: none;" id="img">
                </div>
              </div>
              <!-- /.box-body -->
             
               <input type="hidden" class="form-control" name="messenrthh" id="messenrthh">
              <div id=""></div>
              <div class="box-footer">
                <input type="submit" id="Modifier"  name="Modifier" class="btn btn-primary pull-right" value="Modifier" />
              </div>
            <span id="errorrr"></span>
          </div>
        </fieldset>								

</form>
<div id="msgmodModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="mySmallModalLabel">Message</h4>
							</div>
							<div class="modal-body"> <div id="msgModParrain"> </div> </div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
<script>
 
 function chanjeimaj(){
   var ad=document.getElementById("img").value;
   alert(add);
   $('#changeimg').attr('src', ad);
 }
  
  $("#modifierParrainform").on('submit',(function(e) {
  e.preventDefault();
     
  // alert('mw la');
  // $("#result").empty();
  $.ajax({
    
  url: "includes/modifierParrainPhp.php", 
  type: "POST",             
  data: new FormData(this), 
  contentType: false,       
  cache: false,             
  processData:false,       
  success: function(data){
$("#msgModParrain").html(data);
$('#msgmodModal').modal('show');
  }
  });
  }));

</script>