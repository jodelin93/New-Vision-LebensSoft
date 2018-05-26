<?php
$titre = "Employer";
	include "../includes/header.php";
	include "../class/Core.php";

	$i = 0;
	$core = new Core();
	$cond = "idEmp = '".$_GET['employer']."'";
	$res = $core->selectData('employer',NULL, $cond, NULL, NULL);
	//var_dump($res);
		
	foreach($res as $key => $value){
		$i++;
	   // echo $value->idEmp;
	
?>


	<br>
    <div class="row">
    <section class="col-lg-12">

    	<div class="panel">

    		<div class="" id="">
              <div class="modal-dialog" style="width: 1100px;">
                <div class="modal-content" style="width: 1100px;">

                  <div class="modal-header">
                 
                    <h4 class="modal-title"><?php echo $value->nom_emp." ".$value->prenom_emp; ?></h4>
                  </div>
                  <div class="modal-body" id="content_form">
                
                              
                           <form id="empFormEdit" action="" method="post">
                              <fieldset>
                                <div class="col-lg-4">
                                  
                                  <input type="texte" id="nom_emp" value="<?= $value->nom_emp ?>" name="nom_emp" class="form-control" placeholder="Le nom de l'employer" required>
                                  <br>
                                  <input type="texte" id="pnom_emp" value="<?= $value->prenom_emp ?>" name="pnom_emp" class="form-control" placeholder="Le prenom de l'employer" required>
                                  <br>
                                  <input type="texte" value="<?= $value->nif ?>" id="cin_emp" name="cin_emp" class="form-control" placeholder="CIN de l'employer" data-inputmask="'mask': ['99-99-99-9999-99-99999']" data-mask>
                                  <br>
                                  <input type="text" id="" value="<?= $value->date_de_nais ?>" name="dat_naiss" class="form-control innodate" placeholder="Date de Naissance" required>
                                  <br>
                                  <input type="texte" value="<?= $value->adresse_emp ?>" id="adr_emp" name="adr_emp" class="form-control" placeholder="L'adresse de l'employer" required>
                                  <br>

                                  <select name="sexe" class="form-control" required>
                                    <option value="<?= $value->sexe ?>"><?= $value->sexe ?></option>
                                    <option>Masculin</option>
                                    <option>Feminin</option>
                                  </select>
                                  <br>
                                  <input type="texte" value="<?= $value->email ?>" id="email_emp" name="email_emp" class="form-control" placeholder="L'e-mail' de l'employer">
                                  <br>
                                  <input type="texte" value="<?= $value->telephone ?>" id="tel_emp" name="tel_emp" class="form-control" placeholder="Le numero de telephone de l'employer" data-inputmask="'mask': ['(999)9999-9999']" data-mask>
                                </div>
                                <div class="col-lg-4">
                                  
                                  <select name="etat_civil" class="form-control" required>
                                    <option value="<?= $value->etat_civil ?>"><?= $value->etat_civil ?></option>
                                    <option>Celibataire</option>
                                    <option>Marie(e)</option>
                                    <option>Divorce(e)</option>
                                    <option>Veuf</option>
                                    <option>Veuve</option>
                                  </select>
                                  <br>
                                  <input type="number" value="<?= $value->nbre_enfant ?>" name="nbre_enf" class="form-control" placeholder="Nombre D'enfant">
                                  <br>

                                                                
                                  <select name="departement" class="form-control" required>
                                    <option value="<?= $value->departement ?>"><?= $value->departement ?></option>
                                    <option>Orphelinat</option>
                                    <option>Parrainage</option>
                                    <option>Habitat</option>
                                    <option>Micro Credit</option>
                                  </select>
                                  <br>
                                  <select class="form-control" name="fonction" id="poste" required>
                                    <option value="<?= $value->fonction ?>"><?= $value->fonction ?></option>
                                    <option>Administrateur</option>
                                    <option>Directeur</option>
                                    <option>Secretaire/Comptable</option>
                                  </select>
                                  <br>
                                  <input type="number" value="<?= $value->salaire ?>" name="salaire" class="form-control" placeholder="Salaire">
                                  <br>
                                  <select class="form-control" name="etat" id="etat" required>
                                    <option value="<?= $value->statut ?>"><?= $value->statut ?></option>
                                    <option>en_service</option>
                                    <option>suspendu</option>
                                  </select>
                                  <br>
                                  <select name="niveau" class="form-control" required>
                                    <option value="<?= $value->niveau_etud ?>"><?= $value->niveau_etud ?></option>
                                    <option>Primaire</option>
                                    <option>Secondaire</option>
                                    <option>Universitaire</option>
                                  </select>
                                  <br>
                                  <input type="text" value="<?= $value->formation_professionelle ?>" name="formationP" class="form-control" placeholder="Formation Professionelle" required>
                                </div>
                                <div class="col-lg-4">
                                  
                                  <input type="text" value="<?= $value->autres_competences ?>" name="autre_comp" placeholder="Autres Competences" class="form-control">
                                  <br>
                                  <label>Experience hors mission</label>
                                  <textarea class="form-control" name="exp" value="null"><?= $value->experience_hors_mission ?></textarea>
                                  <br>
                                  <label>Personne de Contact</label>
                                  <textarea class="form-control"  name="pers_cont" value="null"><?= $value->personne_de_contact ?></textarea>
                                  <br>
                                  <input value="<?= $value->date_entre ?>" type="text" name="date_entre" placeholder="Date d'entree" class="form-control innodate">
                                  <br>
                                  <input value="<?= $value->photo ?>" type="file" name="file"> 
                                 
                                 <br>
                                   <input type="submit" name="enreEmp" id="enreEmp" value="Modifier" class="btn btn-success flat col-xs-12" data-toggle="modal" data-target=".bs-example-modal-sm">
                                  </div>
                                  
                                 
                              </fieldset>
                             
                          </form>

                                           
                     
                  
                    
                  </div>
                
               </div>
              </div>
         </div> 

    	</div>
    				
    </section>
	</div>
</div>
<?php
}
include"../includes/footer.php";
include"../includes/script.php";

if (isset($_POST['enreEmp'])) {
   $field = array('nom_emp','prenom_emp','adresse_emp','sexe','email','telephone','fonction','departement','salaire','date_de_nais','nif','etat_civil','nbre_enfant','niveau_etud','formation_professionelle','autres_competences','date_entre','experience_hors_mission','personne_de_contact','photo','statut');

    $data = array("'".$_POST['nom_emp']."',","'".$_POST['pnom_emp']."',","'".$_POST['adr_emp']."',","'".$_POST['sexe']."',","'".$_POST['email_emp']."',","'".$_POST['tel_emp']."',","'".$_POST['fonction']."',","'".$_POST['departement']."',",$_POST['salaire'].",","'".$_POST['dat_naiss']."',","'".$_POST['cin_emp']."',","'".$_POST['etat_civil']."',",$_POST['nbre_enf'].",","'".$_POST['niveau']."',","'".$_POST['formationP']."',","'".$_POST['autre_comp']."',","'".$_POST['date_entre']."',","'".$_POST['exp']."',","'".$_POST['pers_cont']."',","'".$_POST['file']."',","'".$_POST['etat']."'");

    $edit = $core->editData('employer',$field, $data, 'idEmp', "'".$_GET['employer']."'");
    // header("Location:edit_employer?employer=".$_GET['employer']);

     echo'
             <script language="Javascript">
                 <!--
                  $("#empFormEdit").on("submit",(function(e){
                          e.preventDefault();
                          setTimeout(function(){
                            document.location.replace("edit_employer.php?employer='.$_GET["employer"].'");
                          },3000);
                       }));
                       //document.location.replace("edit_employer.php?employer='.$_GET["employer"].'");

                 // -->
           </script>';

}
?>

 <!-- sample modal content -->
        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-edit">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="mySmallModalLabel">Message</h4>
              </div>
              <div class="modal-body"> Informations Modifi&eacute;s avec Succ&egrave;s </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->