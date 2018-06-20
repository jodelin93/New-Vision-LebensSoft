<!-- SELECT sum(TIMESTAMPDIFF(MINUTE, entree, sortie)) FROM presence WHERE idEmp='JL-100' AND dateP='2018-06-17' GROUP BY dateP; -->

<!-- SELECT sum(TIMESTAMPDIFF(MINUTE, entree, sortie)), nom_emp FROM presence, employer WHERE employer.idEmp = presence.idEmp AND dateP BETWEEN '2018-06-14' AND '2018-06-19' GROUP BY presence.idEmp -->
<?php
           
            include_once("../../class/Core.php");
            $d = $_GET['intervalle'];
        //    $dat = str_replace('-', "' and '", $d);
            $d1 = substr($d, 0, 10);
            $d2 = substr($d, 12, 21);
            $d1= date_create($d1);
            $d1 = date_format($d1, "Y-m-d");

            $d2= date_create($d2);
            $d2 = date_format($d2, "Y-m-d");
         
                        $ii=0;
                        $core=new Core();
                        $att = "sum(TIMESTAMPDIFF(MINUTE, entree, sortie)) nbrH, nom_emp, prenom_emp, max(dateP) dateP";
                        $condP = "employer.idEmp = presence.idEmp AND dateP BETWEEN '".$d1."' and '".$d2."' GROUP BY presence.idEmp";
                        $select= $core->selectData("presence, employer", $att,  $condP, NULL, NULL);
        ?>
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Temps par Employe</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="exame" class="table table-bordered table-hover display nowrap margin-top-10">
                <thead>
                  <tr>             
						<th>Employer</th>
                        <th>Nbre Heure</th>
                        <th>Date</th>
                  </tr>
                </thead>
                  <tbody id="">
                    <?php
                        foreach ($select as $res_rek) {
                   
                      ?>
                     <tr>
                      <td><?php echo $res_rek->prenom_emp." ".$res_rek->nom_emp;?></td>
                      <td>
                      <?php 
                            $rep= $res_rek->nbrH;
                            // $total = 46571; //ton nombre de secondes 
                            // echo $rep;
                            $jr = intval(abs($rep / 1440));
                           
                            $minute = $rep - ($jr * 1440); 
                            $heure = intval(abs($minute / 60)); 
                            $minute = $minute - ($heure * 60); 
                            // $minute = intval(abs($rep / 60)); 
                            // $rep = $rep - ($minute * 60); 
                            // $seconde = $rep; 


                            echo $jr."j:".$heure."h:".$minute."mns"; 
                         
                      ?></td>
                      <td><?=$res_rek->dateP;?></td>
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
          