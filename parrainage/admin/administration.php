<?php
	$titre = "Administration";
	include "../includes/header.php";
	include "../class/Core.php";

	$i = 0;
	$core = new Core();
	$res = $core->selectData('employer',NULL, NULL, NULL, NULL);
	//var_dump($res);
		
	// foreach($res as $key => $value){
	// 	$i++;
	//    echo $value->idEmp;
	// }

?>
<br>
<script src="js/administration.js"></script>
        <div class="row">
     <section class="col-lg-12">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
          <!-- Custom Tabs -->

          
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active "><a href="#dashboard" data-toggle="tab">Dashboard</a></li>
              <li><a href="#rapport" data-toggle="tab">Rapport</a></li>
              <li><a href="#enregistrement" data-toggle="tab">Enregistrement</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="dashboard">
                <?php include("includes/dashboard.php"); ?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="rapport">
              
               
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="enregistrement">
                   <?php include("includes/enregistrement.php"); ?>

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->


        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


          <div class="modal fade" id="modal-utilisateur">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="titre">Utilisateur</h4>
                  </div>
                  <div class="modal-body" id="content_form">
                   
                        <div class="nav-tabs-custom">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#enregistrementM" data-toggle="tab">Enregistrement</a></li>
                            <li><a href="#listeM" data-toggle="tab" onclick="adminListe('utilisateur')" class="btn flat">Liste</a></li>
                            <li><a href="#modifier" data-toggle="tab" class="btn flat" id="modifierTitre"></a></li>
                         
                          </ul>
                          <div class="tab-content" id="main">
                          
                            <!-- /.tab-pane -->
                            <div class="active tab-pane" id="enregistrementM">
                              
                              <div id="result"></div>
                              <div class="col-lg-4" >
                                  <img src="" id="previewing" width="100%">
                                </div>
                            <form id="utilForm" action="" method="post" enctype="multipart/form-data">
                              <fieldset>
                                  <select class="form-control" name="id_emp" id="id_emp">
                                    <option selected disabled>---Id Employer---</option>
                                    <?php 
                                    $info_emp = $core->selectData('employer', 'idEmp', NULL, NULL, NULL);
                                    // var_dump($info_emp);
                                    foreach ($info_emp as $value) {
                                    ?>
                                    <option><?php echo $value->idEmp; ?></option>
                                    <?php

                                    }
                                    ?>
                                  </select>
                                  <br>
                                  <input type="texte" id="nom_util" name="nom_util" class="form-control" placeholder="Le nom de l'utilisateur">
                                  <br>
                                  <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Le mot de passe de l'utilisateur">
                                  <br>
                                  <select class="form-control" name="droit" id="droit">
                                    <option selected disabled>---Droit---</option>
                                    <option>Administrateur</option>
                                    <option>Utilisateur</option>
                                  </select>
                                  <br>
                                  <select class="form-control" name="etat" id="etat">
                                    <option selected disabled>---Etat---</option>
                                    <option>actif</option>
                                    <option>desactive</option>
                                  </select>
                                  <br>
                                  
                                  
                                  <input type="hidden" name="branche" value="Hotel" >
                                  <input type="file" name="file" id="file" >
                                  <div  id="message" style="width:100%;"></div>
                                  <br>
                                  <input type="submit" name="enreUtil" id="enreUtil" value="Enregistrer" class="btn btn-success flat">
                                  <input type="reset" class="btn btn-danger flat" value="Annuler">
                              </fieldset>
                            </form>
                                           
                          </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="listeM">
                                <div id="listeUtilisateur">
                                  
                                </div>
                            </div>

                            <div class="tab-pane" id="modifier">
                              
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                   
                  </div>
               
               </div>
              </div>
         </div> 

         <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        
          <div class="modal fade" id="modal-employer">
              <div class="modal-dialog" style="width: 1100px;">
                <div class="modal-content" style="width: 1100px;">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Employer</h4>
                  </div>
                  <div class="modal-body" id="content_form">
                   
                        <div class="nav-tabs-custom">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#enregistrementE" data-toggle="tab">Enregistrement</a></li>
                            <li><a href="#listeE" data-toggle="tab" onclick="empListe('employer')" class="btn flat">Liste</a></li>
                            
                         
                          </ul>
                          <div class="tab-content" id="main">
                          
                            <!-- /.tab-pane -->
                            <div class="active tab-pane" id="enregistrementE">
                              
                              <div id="result"></div>
                              
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
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="listeE">
                                <div id="listeEmployer">
                                  
                                </div>
                            </div>

                           
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                   
                  </div>
               
               </div>
              </div>
         </div> 

         <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        
          <div class="modal fade" id="modal-chambre">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="titre"></h4>
                  </div>
                  <div class="modal-body" id="content_form">
                   
                        <div class="nav-tabs-custom">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#enregistrementC" data-toggle="tab">Enregistrement</a></li>
                            <li><a href="#listeC" data-toggle="tab" onclick="adminListe('chambre')" class="btn flat">Liste</a></li>
                         
                         
                          </ul>
                          <div class="tab-content" id="main">
                          
                            <!-- /.tab-pane -->
                            <div class="active tab-pane" id="enregistrementC">
                              
                              <div id="result"></div>
                             
                           <form id="chmbForm" action="" method="post">
                            <fieldset>
                                
                                <input type="texte" id="id_chmb" name="id_chmb" class="form-control" placeholder="L'id de la chambre">
                                <br>
                                <input type="texte" id="nbre_lit" name="nbre_lit" class="form-control" placeholder="Le nombre de lit">
                                <br>
                                <input type="texte" id="prix" name="prix" class="form-control" placeholder="Le prix ">
                                <br>
                                <input type="texte" name="tel_chmb" id="tel_chmb" class="form-control" placeholder="Telephone">
                                <br>
                                <input type="submit" name="enreChmb" id="enreChmb" class="btn btn-success flat">
                            </fieldset>
                          </form>
                                           
                          </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="listeC">
                                <div id="">
                                  
                                </div>
                            </div>

                          
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                   
                  </div>
               
               </div>
              </div>
         </div> 

         <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        
          <div class="modal fade" id="modal-salle">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="titre">Maison</h4>
                  </div>
                  <div class="modal-body" id="content_form">
                   
                        <div class="nav-tabs-custom">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#enregistrementS" data-toggle="tab">Enregistrement</a></li>
                            <li><a href="#listeS" data-toggle="tab" onclick="adminListe('utilisateur')" class="btn flat">Liste</a></li>
                           
                          </ul>
                          <div class="tab-content" id="main">
                          
                            <!-- /.tab-pane -->
                            <div class="active tab-pane" id="enregistrementS">
                              
                              <div id="result"></div>
                              
                           <form id="salleForm" action="" method="post">
                            <fieldset>
                                
                                <input type="texte" id="id_salle" name="id_salle" class="form-control" placeholder="L'id de la salle">
                                <br>
                                <input type="texte" id="prix_hr" name="prix_hr" class="form-control" placeholder="Prix par heure">
                                <br>
                                <input type="texte" id="prix_ev" name="prix_ev" class="form-control" placeholder="Prix evenement">
                                <br>
                                
                                <input type="submit" name="enreSalle" id="enreSalle" class="btn btn-success flat">
                            </fieldset>
                          </form>
                                           
                          </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="listeS">
                                <div id="listeUtilisateur">
                                  
                                </div>
                            </div>

                          
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                   
                  </div>
               
               </div>
              </div>
         </div> 

         <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        
          <div class="modal fade" id="modal-piscine">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="titre"></h4>
                  </div>
                  <div class="modal-body" id="content_form">
                   
                        <div class="nav-tabs-custom">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#enregistrementP" data-toggle="tab">Enregistrement</a></li>
                            <li><a href="#listeP" data-toggle="tab" onclick="adminListe('piscine')" class="btn flat">Liste</a></li>
                          
                          </ul>
                          <div class="tab-content" id="main">
                          
                            <!-- /.tab-pane -->
                            <div class="active tab-pane" id="enregistrementP">
                              
                              <div id="result"></div>
                             
                           <form id="piscForm" action="" method="post">
                            <fieldset>
                                
                                <input type="texte" id="id_piscine" name="id_piscine" class="form-control" placeholder="Id piscine">
                                <br>
                                <input type="texte" id="prix_ind" name="prix_ind" class="form-control" placeholder="Prix par individuel">
                                <br>
                                <input type="texte" id="prix_res" name="prix_res" class="form-control" placeholder="Prix reservation">
                                <br>
                                
                                <input type="submit" name="enrePisc" id="enrePisc" class="btn btn-success flat">
                            </fieldset>
                          </form>
                                           
                          </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="listeP">
                                <div id="">
                                  
                                </div>
                            </div>

                           
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                   
                  </div>
               
               </div>
              </div>
         </div> 

         <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        
          <div class="modal fade" id="modal-taux">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" >Taux</h4>
                  </div>
                  <div class="modal-body" id="content_form">
                   
                        <div class="nav-tabs-custom">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#enre_taux" data-toggle="tab">Enregistrement</a></li>
                            <li><a href="#listeT" data-toggle="tab" onclick="tauxFonc('taux')" class="btn flat">Liste</a></li>
                            
                         
                          </ul>
                          <div class="tab-content" id="main">
                          
                            <!-- /.tab-pane -->
                            <div class="active tab-pane" id="enre_taux">
                              
                              <div id="result"></div>
                           <form id="tauxForm" action="" method="post">
                            <fieldset>
                                
                                
                                <input type="texte" id="achat" name="achat" class="form-control" placeholder="Prix a l'achat">
                                <br>
                                <input type="texte" id="vente" name="vente" class="form-control" placeholder="Prix a la vente">
                                <br>
                                
                                <input type="submit" name="enreTaux" id="enreTaux" class="btn btn-success flat">
                            </fieldset>
                          </form>
                                           
                          </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="listeT">
                                <div id="">
                                  
                                </div>
                            </div>

                            
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                   
                  </div>
               
               </div>
              </div>
         </div> 

         <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


       <div class="modal fade messagec" id="modal-default">
  
          <div class="modal-dialog">
      
            <div class="modal-content" >
        
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> <h4><i class="icon fa fa-ban"></i> Alert!</h4></h4>
           
              </div>
              <div class="modal-body">
        
           <div id='viewsuc'> </div>
        <span id="error"></span>
           
        </div> </div> </div> </div>


    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
 



</div>
<?php

	include"../includes/footer.php";
	include"../includes/script.php"; 

?>

  <div class="modal fade" id="modal-default-ajou">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ajouter un evenement</h4>
              </div>
              <div class="modal-body">
                <form method="post" id="ajouterEvent">
        <span id="mess"></span>
                  <fieldset>
                                            <!-- Date -->
                    <div class="form-group">
                      <label>Date:</label>

                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control pull-right" name="datev" id="datepicker">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <br>
                    <input type="text" name="titrev" class="form-control" placeholder="Evenement a venir!">
                    <br>
                    <textarea placeholder="Description" name="descv" class="form-control"></textarea>
                  </fieldset>
             
              </div>
              <div class="modal-footer">
                <input type="reset" class="btn btn-default pull-left" data-dismiss="modal" value="Annuler">
                <input type="submit" class="btn btn-primary" value="Enregistrer" name="ajouter_eve">
              </div>
           </form>
       </div>
     

            </div>
            <!-- /.modal-content -->
          </div>
      
      <!-- ./wrapper -->
     <div class="modal fade" id="modal-default-mess">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Evenement pour le <span id="dav" style="font-weight:bold;"></span></h4>
              </div>
              <div class="modal-body" >
        <label>Message</label>
             <div class="row" id="text" style="margin-left:10px; border:1px dashed gray; margin-right:10px;"></div><br><br>
        <div id="user" style="float:left;"></div>
          <div id="dac" style="float:right;"></div><br>
       </div>
     

            </div>
            <!-- /.modal-content -->
          </div>
        </div>
      


<script type="text/javascript">
    $(function () {
        $('#datr').datetimepicker();
       
    });


  
</script>