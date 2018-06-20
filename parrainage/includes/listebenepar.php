        <?php
            session_start();
            include_once("../../class/Core.php");
            
                        $ii=0;
                        $core=new Core();
                        $condP = "beneficiaire.idBene=bene_parrain_emp.idBene and idParrain='".$_GET['idParrain']."'";
                        $select= $core->selectData("beneficiaire, bene_parrain_emp", NULL,  $condP, NULL, NULL);
        ?>
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ses Fieulles</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="exame" class="table table-bordered table-hover display nowrap margin-top-10">
                <thead>
                  <tr>
                    <th>Nom Complet</th>
                    <th>Sexe</th>
                    <th>Statut</th>
                    <th>Date de Parrainage</th>
                    <th>Option</th>
                   
                  </tr>
                </thead>
                  <tbody id="">
                    <?php
                        foreach ($select as $res_rek) {
                   
                      ?>
                     <tr>
                      <td><?php echo $res_rek->prenom_ben." ".$res_rek->nom_ben;?></td>
                      <td><?=$res_rek->sexe;?></td>
                      <td><?=$res_rek->typeBene;?></td>
                      <td><?=$res_rek->dateParrainage;?></td>
                     
                        <td class="">

                                           <div class="" style="color: blue; ">
                                             <?php
                                                // if ($_SESSION['droit']=="Administrateur") {
                                              ?>
                                              <button onclick="retirerBenePar('<?php echo $res_rek->idBene; ?>')" class="">
                                                
                                                  <i class="<?php if($res_rek->statut ==1){echo 'fa fa-check-square-o';}else{echo 'fa fa-square'; } ?>"></i>
                                              </button>
                                               <?php
                                                  //  }
                                                ?>
                                            </div>


                                    


                                       

                                                                                 
                     </td>

                     </tr>
                  <?php
                   } ?>
                  </tbody>
        
             
              </table>

              
            </div>
            <!-- /.box-body -->
          </div>
           <!-- jQuery 3 -->
  <script src="../../assets/vendor_components/jquery/dist/jquery.min.js"></script>
  
  <!-- Bootstrap 3.3.7 -->
  <script src="../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
  
  <!-- Select2 -->
  <script src="../../assets/vendor_components/select2/dist/js/select2.full.js"></script>
  
  <!-- InputMask -->
  <script src="../../assets/vendor_plugins/input-mask/jquery.inputmask.js"></script>
  <script src="../../assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="../../assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js"></script>
  
  <!-- date-range-picker -->
  <script src="../../assets/vendor_components/moment/min/moment.min.js"></script>
  <script src="../../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  
  <!-- bootstrap datepicker -->
  <script src="../../assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  
  <!-- bootstrap color picker -->
  <script src="../../assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  
  <!-- bootstrap time picker -->
  <script src="../../assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js"></script>
  
  <!-- SlimScroll -->
  <script src="../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  
  <!-- iCheck 1.0.1 -->
  <script src="../../assets/vendor_plugins/iCheck/icheck.min.js"></script>
  
  <!-- FastClick -->
  <script src="../../assets/vendor_components/fastclick/lib/fastclick.js"></script>
  
  <!-- Cross Admin App -->
  <script src="../../js/template.js"></script>
  
  <!-- Cross Admin for demo purposes -->
  <script src="../../js/demo.js"></script>
  
  <!-- Cross Admin for advanced form element -->
  <script src="../../js/pages/advanced-form-element.js"></script>
  <script src="../js/parrainage.js"></script>
          