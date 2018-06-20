<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="../../assets/vendor_components/font-awesome/css/font-awesome.min.css">

<!-- Ionicons -->
<link rel="stylesheet" href="../../assets/vendor_components/Ionicons/css/ionicons.min.css">		

<!-- Theme style -->
<link rel="stylesheet" href="../../css/master_style.css">

<!-- Cross Admin skins -->
<link rel="stylesheet" href="../../css/skins/_all-skins.css">
<?php

include_once("../../class/Core.php");

            $ii=0;
            $core=new Core();
?>
      	 <div class="box">
             <div class="box-header">
              <h3 class="box-title">Liste des parrains</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="exple" class="table table-bordered table-hover display nowrap margin-top-10">
                <thead>
                  <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Telephone</th>
                    <th>E-mail</th>
                    <th>Profession</th>
                    <th>Pays</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody id="listeprrain">
                

    <?php
         $select= $core->selectData("parrain", NULL,  NULL, NULL, NULL);
                
                foreach ($select as $res_rek) {
                  
                 ?>
                <tr>
                  <td>
                     
                    <?= $res_rek->prenom_par;?>
                      
                    </td>
                  <td><?=$res_rek->nom_par;?></td>
                  <td><?=$res_rek->telephone;?></td>
                  <td><?=$res_rek->email;?></td>
                  <td><?=$res_rek->profession;?></td>
                  <td><?=$res_rek->nationalite;?></td>
                  <td>
                      <div class="row">
                        <div class="col-md-3">
                         <a onclick="modifierParrain('<?php echo $res_rek->idParrain; ?>')">
                          <i class="fa fa-pencil"></i>
                         </a>
                          <i class="fa fa-trash"></i>
                        </div>
                        <div class="col-md-9">
                           <a class="btn btn-sm bg-success beneficiaireButton" onclick="modalbeneparrain('<?php echo $res_rek->idParrain; ?>')" >
                              <small class="label pull-right bg-warning" style="font-size: 12px;" > <?php $qte = $core->selectData('bene_parrain_emp','count(idBene) qte', "idParrain='".$res_rek->idParrain."'", NULL, NULL); 
                              	foreach ($qte as $keys) {
                              		$qtes = $keys->qte;
                              	}
                            echo $qtes; ?>
                        
                           </small>
                            Bene
                            </a>
                         </div>

                      </div>
                  </td>


             </tr>
        <?php } ?>
     
                </tbody>
                
                <tfoot>
                  <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Telephone</th>
                    <th>E-mail</th>
                    <th>Profession</th>
                    <th>Pays</th>
                    <th>Options</th>
                  </tr>
                </tfoot>
              </table>

              
            </div>
            <!-- /.box-body -->
          </div>

          <!-- /.box -->          
        </div>
        <!-- /.col -->
        <!-- jQuery 3 -->
	<script src="../../assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- Bootstrap 3.3.7 -->
	<script src="../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- DataTables -->
	<script src="../../assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../../assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="../../assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Cross Admin App -->
	<script src="../../js/template.js"></script>
	
	<!-- Cross Admin for demo purposes -->
	<script src="../../js/demo.js"></script>
	
	<!-- This is data table -->
    <script src="../../assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
    
    <!-- start - This is for export functionality only -->
    <script src="../../assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="../../assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
    <script src="../../assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
    <script src="../../assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
    <script src="../../assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="../../assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
	
	<!-- Cross Admin for Data Table -->
	<script src="../../js/pages/data-table.js"></script>