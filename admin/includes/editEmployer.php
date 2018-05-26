<?php

include("../../class/Core.php");
$core = new Core();
$table = $_GET['table'];
$id = $_GET['id'];

$cond = "idEmp = ".$id;
$sel = $core->selectData('employer', NULL, $cond, NULL, NULL);

foreach ($sel as $resEmp) {
?>



	 <div class="modal fade" id="modal-employer-edit">
              <div class="modal-dialog" style="width: 1100px;">
                <div class="modal-content" style="width: 1100px;">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Employer</h4>
                  </div>
                  <div class="modal-body" id="content_form">
            	  
                              
                           <form id="empForm" action="" method="post">
                              <fieldset>
                                <div class="col-lg-4">
                                  
                                  <input type="texte" id="nom_emp" name="nom_emp" class="form-control" placeholder="Le nom de l'employer" required>
                                  <br>
                                  <input type="texte" id="pnom_emp" name="pnom_emp" class="form-control" placeholder="Le prenom de l'employer" required>
                                  <br>
                                  <input type="texte" id="cin_emp" name="cin_emp" class="form-control" placeholder="CIN de l'employer" data-inputmask="'mask': ['99-99-99-9999-99-99999']" data-mask>
                                  <br>
                                  <input type="text" id="" name="dat_naiss" class="form-control innodate" placeholder="Date de Naissance" required>
                                  <br>
                                  <input type="texte" id="adr_emp" name="adr_emp" class="form-control" placeholder="L'adresse de l'employer" required>
                                  <br>

                                  <select name="sexe" class="form-control" required>
                                    <option selected disabled>Sexe</option>
                                    <option>Masculin</option>
                                    <option>Feminin</option>
                                  </select>
                                  <br>
                                  <input type="texte" id="email_emp" name="email_emp" class="form-control" placeholder="L'e-mail' de l'employer">
                                  <br>
                                  <input type="texte" id="tel_emp" name="tel_emp" class="form-control" placeholder="Le numero de telephone de l'employer" data-inputmask="'mask': ['(999)9999-9999']" data-mask>
                                </div>
                                <div class="col-lg-4">
                                  
                                  <select name="etat_civil" class="form-control" required>
                                    <option selected disabled>Etat Civil</option>
                                    <option>Celibataire</option>
                                    <option>Marie(e)</option>
                                    <option>Divorce(e)</option>
                                    <option>Veuf</option>
                                    <option>Veuve</option>
                                  </select>
                                  <br>
                                  <input type="number" name="nbre_enf" class="form-control" placeholder="Nombre D'enfant">
                                  <br>

                                                                
                                  <select name="departement" class="form-control" required>
                                    <option selected disabled>Departement</option>
                                    <option>Orphelinat</option>
                                    <option>Parrainage</option>
                                    <option>Habitat</option>
                                    <option>Micro Credit</option>
                                  </select>
                                  <br>
                                  <select class="form-control" name="fonction" id="poste" required>
                                    <option selected disabled>---Poste---</option>
                                    <option>Administrateur</option>
                                    <option>Secretaire/Comptable</option>
                                    <option>Vendeur</option>
                                  </select>
                                  <br>
                                  <input type="number" name="salaire" class="form-control" placeholder="Salaire">
                                  <br>
                                  <select class="form-control" name="etat" id="etat" required>
                                    <option selected disabled>---Statut---</option>
                                    <option>en_service</option>
                                    <option>suspendu</option>
                                  </select>
                                  <br>
                                  <select name="niveau" class="form-control" required>
                                    <option selected disabled>Niveau D'etude</option>
                                    <option>Primaire</option>
                                    <option>Secondaire</option>
                                    <option>Universitaire</option>
                                  </select>
                                  <br>
                                  <input type="text" name="formationP" class="form-control" placeholder="Formation Professionelle" required>
                                </div>
                                <div class="col-lg-4">
                                  
                                  <input type="text" name="autre_comp" placeholder="Autres Competences" class="form-control">
                                  <br>
                                  <label>Experience hors mission</label>
                                  <textarea class="form-control" name="exp" value="null"></textarea>
                                  <br>
                                  <label>Personne de Contact</label>
                                  <textarea class="form-control"  name="pers_cont" value="null"></textarea>
                                  <br>
                                  <input type="text" name="date_entre" placeholder="Date d'entree" class="form-control innodate">
                                  <br>
                                  <input type="file" name="file"> 
                                 
                                 <br>
                                   <input type="submit" name="enreEmp" id="enreEmp" value="Enregistrer" class="btn btn-success flat col-xs-12">
                                  </div>
                                  
                                 
                              </fieldset>
                             
                          </form>

                                           
                     
                  
                    
                  </div>
                
               </div>
              </div>
         </div> 


<?php
}



// $del = $core->editData($table, $field, $data, $idname, $id);
// $test = 1;
// include 'adminListe.php';
?>

   
         