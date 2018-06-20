<!DOCTYPE html>
<html>
<?php
$titre = "Parrainage";

require "../class/Droit.php";

require "../includes/header.php";
require "../class/Core.php";
require "../class/upload.php";
$core = new Core();
?>

 <section class="content">
	   <div class="row">
          <div class="nav-tabs-custom" id="tabs">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Ajouter un Parrain</a></li>
              <li><a href="#tab_2" data-toggle="tab" id="tabP">Les Parrains</a></li>
              <li><a href="#tab_3" data-toggle="tab">Lettres</a></li>
              
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-user fa-spin"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
              	<div class="row">
                <?php include("includes/insererParrains.php"); ?>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
          			    	 <div class="box">
             <div class="box-header">
              <h3 class="box-title">Liste des parrains</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
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
                  <?php  $select= $core->selectData("parrain", NULL,  NULL, NULL, NULL);
                
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
      
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
               <?php include("includes/lettres.php");  ?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
     </div>

<br />



	</section>	    

  </div><!-- /.col -->
       
 
            
            
      
             
    
   </div>
</div>


     
        
    

 <?php
 include("../includes/footer.php");
 // include("includes/control_side_bar.php");
 // include '../includes/script.php';

 ?> 

  
				<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myLargeModalLabel">Modifier Parrain</h4>
							</div>
							<div class="modal-body">
								<img class="img-round" style="width: 100%;" id="img01" src="lettres/20170827_092344.jpg">
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Fermer</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>

 		<div id="msgModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="mySmallModalLabel">Message</h4>
							</div>
							<div class="modal-body"> <div id="msgInsertionParrain"> </div> </div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
 	<div id="ajouterLettreModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog ">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myModalLabel">Ajouter une lettre</h4>
              </div>
              
							<div class="modal-body">
								<div class="">
									<form id="formajouterlettre">
                   
           
                <div class="col-xs-12">
                <div class="col-xs-4">
                <div class="">
                  <input name="emetteur" type="radio" id="emetteurP" onclick="radioState()" value="ep"/>
                  <label for="emetteurP">Emetteur</label>
                  <input name="destinateur" type="radio" id="destinateurP" onclick="radioState()" value="dp"/>
                  <label for="destinateurP">Destinateur</label>			
			        	</div>
                </div>
                <div class="col-xs-8">
                  <label>Parrain</label>
                  <select class="form-control" name="parrainname" onchange="AfficherSesBene(this.value)">
                    <option selected disabled></option>
                    <?php
                    $cond = "parrain.idParrain = bene_parrain_emp.idParrain";
                    $par = $core->selectData("parrain, bene_parrain_emp", "DISTINCT bene_parrain_emp.idParrain, nom_par, prenom_par", $cond, NULL, NULL); 
                    foreach($par as $infop){
                    ?>
                    <option value="<?= $infop->idParrain; ?>"><?php echo $infop->nom_par." ".$infop->prenom_par; ?> </option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                  </div>
                  <br>

                     <div class="col-xs-12">
                <div class="col-xs-4">
                <div class="">
                  <input name="emetteur" type="radio" id="emetteurB" onclick="radioState()" value="eb"/>
                  <label for="emetteurB">Emetteur</label>
                  <input name="destinateur" type="radio" id="destinateurB" onclick="radioState()" value="db"/>
                  <label for="destinateurB">Destinateur</label>			
			        	</div>
                </div>
                <div class="col-xs-8">
                  <label>Beneficiaire</label>
                  <select class="form-control" name="benename" id="afficheSesBeness">
                  
                  </select>
              
                  <label>Date</label>
                  <input type="date" class="form-control" name="date">
                </div>
                </div><br><br>
                  <br>
                 <input type="file" name="file" id="imajlettre" ><br>
                 
                 
                 <input type="submit" class="btn btn-success btn-flat" value="Ajouter Lettre">
                  </form>
								</div>
							</div>
							<div class="modal-footer">
              <div class="pull-left" id="msgLettreRep"></div>
								<button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Fermer</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
	</div>

  
				<!-- /.modal -->
 	<div id="modalanger" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myModalLabel">Affecter Beneficiaire a un Parrain</h4>
							</div>
							<div class="modal-body">
								<div class="infomodal">
									
								</div>
							</div>
							<div class="modal-footer">
                <div id="reponseRequete" class="pull-left"></div>
								<button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Fermer</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
	</div>
				<!-- /.modal -->

	 <!-- sample modal content -->
				<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modifierParrainModal">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myLargeModalLabel">Modifier Parrain</h4>
							</div>
							<div class="modal-body">
								<div class="infomodifierModal"></div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Fermer</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
	<!-- jQuery 3 -->
	<script src="../assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- Bootstrap 3.3.7 -->
	<script src="../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="../assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Cross Admin App -->
	<script src="../js/template.js"></script>
	
	<!-- Cross Admin for demo purposes -->
	<script src="../js/demo.js"></script>


	<!-- DataTables -->
	<script src="../assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- This is data table -->
    <script src="../assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
    
    <!-- start - This is for export functionality only -->
    <script src="../assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="../assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
    <script src="../assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
    <script src="../assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
    <script src="../assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
	
	<!-- Cross Admin for Data Table -->
	<script src="../js/pages/data-table.js"></script>
	<!-- Select2 -->
	<script src="../assets/vendor_components/select2/dist/js/select2.full.js"></script>
	
	<!-- InputMask -->
	<script src="../assets/vendor_plugins/input-mask/jquery.inputmask.js"></script>
	<script src="../assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="../assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js"></script>
	
	<!-- date-range-picker -->
	<script src="../assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- bootstrap datepicker -->
	<script src="../assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	
	<!-- bootstrap color picker -->
	<script src="../assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	
	<!-- bootstrap time picker -->
	<script src="../assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js"></script>

	
	<!-- iCheck 1.0.1 -->
	<script src="../../assets/vendor_plugins/iCheck/icheck.min.js"></script>
	<!-- iCheck 1.0.1 -->
	<script src="../assets/vendor_plugins/iCheck/icheck.min.js"></script>
	

	<!-- Cross Admin for advanced form element -->
	<script src="../js/pages/advanced-form-element.js"></script>
	<script src='js/xgrmnr.js'></script>

<script  src="js/indexgal.js"></script>
<script src="js/parrainage.js"></script>
<script src="js/index.js"></script>
<!-- ./wrapper -->
<script>
    // $('#myModal').modal('show');
	function conversation(str){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
            $('#lettreSection').html(this.responseText);
          }
        };
        xmlhttp.open("GET", "includes/lettreAjax.php?idlettre=" + str, true);
        xmlhttp.send();
    }

  function ajouterLettreModal(){
    $('#ajouterLettreModal').modal('show');
    
  }

function modalbeneparrain(str){
// $(".infomodal").html(str);

 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("listeChambre").innerHTML = this.responseText;
                $('.infomodal').html(this.responseText);
            }
        };
        xmlhttp.open("GET", "includes/beneparrain.php?idParrain=" + str, true);
        xmlhttp.send();
// document.getElementByClassName('infomodal').value="fdkjh";
$("#modalanger").modal('show'); 
}
 

function AfficherSesBene(str){
  var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status==200){
       document.getElementById('afficheSesBeness').innerHTML=this.responseText;
        }
      }
  xmlhttp.open("GET","includes/afficheSesBene.php?idParrain=" +str, true);
  xmlhttp.send();
  // alert(str);
  // $('#afficheSesBeness').innerHTML='mw bo0on sou li';
 

}
 function modifierParrain(str){

 	var xmlhttp = new XMLHttpRequest();
 	xmlhttp.onreadystatechange = function(){
 		if (this.readyState ==4 && this.status == 200) {
 			$('.infomodifierModal').html(this.responseText);
 		}
 	};
 	xmlhttp.open("GET","includes/modifierParrain.php?idParrain=" + str, true);
 	xmlhttp.send();

 	$('#modifierParrainModal').modal('show');
 }


function radioState(){
 if(document.getElementById('emetteurP').checked){
   document.getElementById('destinateurB').checked=true;
   document.getElementById('emetteurB').checked=false;
   document.getElementById('destinateurP').checked=false;
 }

  if(document.getElementById('emetteurB').checked){
   document.getElementById('destinateurP').checked=true;
   document.getElementById('emetteurP').checked=false;
   document.getElementById('destinateurB').checked=false;
 }

  if(document.getElementById('destinateurP').checked){
   document.getElementById('emetteurB').checked=true;
   document.getElementById('emetteurP').checked=false;
   document.getElementById('destinateurB').checked=false;
 }
 if(document.getElementById('destinateurB').checked){
   document.getElementById('emetteurP').checked=true;
   document.getElementById('destinateurP').checked=false;
   document.getElementById('emetteurB').checked=false;
 }
 
}
</script>
</div>
</div>
</body>
</html>



        