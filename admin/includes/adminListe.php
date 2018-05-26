<?php
session_start();
if (!isset($test)) {

include("../../class/Core.php");
$core = new Core();
}
if ($_GET['table']=="utilisateur") {
 
?>

            <div id="listeUtilisateu">
                                 <?php $util_res = $core->selectData('utilisateur', NULL, NULL, NULL, NULL);?>

               <div class="box">
                  <div class="box-header">
                 
                  </div>
                  <!-- /.box-header -->
                     <div class="box-body">
                                <table id="hotel_table" class="table table-bordered table-striped">
                                  <thead>
                                    <tr>
                                      <th>Id</th>
                                      <th>Nom</th>

                                      <th>Droit</th>
                                      <th>Etat</th>
                                
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <?php 
                                      foreach ($util_res as $info) {
                                       ?>
                                      <tr>
                                        <td><?php echo $info->idEmp;?></td>
                                        <td><?php echo $info->login;?></td>
                                        <td id="<?php echo $info->idEmp;?>"><a onclick="editDroit('utilisateur','<?php echo $info->idEmp;?>','<?php echo $info->droit;?>')"><?php echo $info->droit; ?></a></td>
                                        <td><?php echo $info->etat;?></td>
                                      
                                        
                                         <td class="col-xs-12">

                                         	 <div class="col-xs-2" style="color: blue; ">
                                              <a onclick="resetPass('utilisateur','<?php echo $info->idEmp;?>')" class="">
                                                  <i class="fa fa-lock" id="lock<?php echo $info->idEmp;?>"></i>
                                              </a>
                                            </div>


                                            <div class="col-xs-2" style="color: red; ">
                                              <a onclick="desactiveUtil('utilisateur','<?php echo $info->idEmp;?>')" class="">
                                                  <i class="fa fa-close"></i>
                                              </a>
                                            </div>

                                          

                                            <div class="col-xs-2" style="color: green; ">
                                              <?php
                                                if ($_SESSION['droit']=="Administrateur") {
                                              ?>
                                              <a onclick="activeUtil('utilisateur','<?php echo $info->idEmp;?>')" class=" ">
                                                  <i class="fa fa-check"></i>
                                              </a> 
                                               </div>


                                        <?php
                                           }
                                        ?>

                                                                                 
                                        </td>
                                       
                                       

                                      </tr>
                                     <?php
                                     }
                                     ?>  

                                </tbody>
                                  <tfoot>
                                    <tr>
                                      <th>Id</th>
                                      <th>Nom</th>
                                      <th>Droit</th>
                                      <th>Etat</th>
                                  
                                      <th>Action</th>
                                 
                                    
                                  </tr>
                                  </tfoot>
                                </table>
                     </div>
            <!-- /.box-body -->
                 </div>
          <!-- /.box -->
                               </div>

<?php
}
?>

<?php
if ($_GET['table']== "employer") {
 
?>


   <div id="listeUtilisateu">
                                 <?php $emp_res = $core->selectData('employer', NULL, NULL, NULL, NULL);?>

               <div class="box">
                  <div class="box-header">
                 
                  </div>
                  <!-- /.box-header -->
                     <div class="box-body">
                                <table id="hotel_table" class="table table-bordered table-striped">
                                  <thead>
                                    <tr>
                                      <th>Id</th>
                                      <th>Nom</th>

                                      <th>Prenom</th>
                                      <th>CIN</th>
                                      <th>Adresse</th>
                                      <th>Telephone</th>
                                      <th>E-mail</th>
                                      <th>Poste</th>
                                      <th>Departement</th>
                                      <th>Action</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                      <?php 
                                      foreach ($emp_res as $info){
                                       ?>
                                      <tr>
                                        <td><?php echo $info->idEmp;?></td>
                                        <td><?php echo $info->nom_emp;?></td>
                                        <td><?php echo $info->prenom_emp;?></td>
                                        <td><?php echo $info->nif;?></td>
                                        
                                        <td><?php echo $info->adresse_emp;?></td>
                                        <td><?php echo $info->telephone;?></td>
                                        <td><?php echo $info->email;?></td>
                                       
                                        <td><?php echo $info->fonction;?></td>
                                        <td><?php echo $info->departement;?></td>
                                      
                                        
                                         <td class="col-xs-12">

                                         
                                            <div class="col-xs-3" style="color: red; ">
                                              <a href="employer?employer=<?php echo $info->idEmp; ?>" class="" title="Dossier Personnel">
                                                  <i class="fa fa-file"></i>
                                              </a>
                                            </div>

                                          


                                             <div class="col-xs-3" style="color: brown;">
                                              <?php
                                                if ($_SESSION['droit']=="Administrateur") {
                                              ?>
                                              <a href="edit_employer?employer=<?php echo $info->idEmp; ?>" class="" title="Modifier">
                                                  <i class="fa fa-pencil"></i>
                                              </a> 
                                               </div>

                                               
                                        <?php
                                           }
                                        ?>


                                             <div class="col-xs-3" style="color: brown;">
                                              <?php
                                                if ($_SESSION['droit']=="Administrateur") {
                                              ?>
                                              <a href="edit_employer?employer=<?php echo $info->idEmp; ?>" class="" title="Modifier">
                                                  <i class="fa fa-close"></i>
                                              </a> 
                                               </div>

                                               
                                        <?php
                                           }
                                        ?>
                                         
                                        </td>
                                       
                                       

                                      </tr>
                                     <?php
                                     }
                                     ?>  

                                </tbody>
                                  <tfoot>
                                    <tr>
                                     <th>Id</th>
                                      <th>Nom</th>

                                      <th>Prenom</th>
                                      <th>CIN</th>
                                      <th>Adresse</th>
                                      <th>Telephone</th>
                                      <th>E-mail</th>
                                      <th>Poste</th>
                                      <th>Departement</th>
                                      <th>Action</th>
                                    
                                  </tr>
                                  </tfoot>
                                </table>
                     </div>
            <!-- /.box-body -->
                 </div>
          <!-- /.box -->
                               </div>


 <?php
}

?>


  