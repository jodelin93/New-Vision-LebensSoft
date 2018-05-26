<!DOCTYPE html>
<html>
<?php
$titre = "Parrainage";

require "../class/Droit.php";

require "../includes/header.php";
require "../class/Core.php";
$core = new Core();
?>

 <section class="content">
	   <div class="row">
          <div class="nav-tabs-custom" id="tabs">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Ajouter un Parrain</a></li>
              <li><a href="#tab_2" data-toggle="tab">Les Parrains</a></li>
              <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>
              
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
                <tbody id="">
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
                          <i class="fa fa-pencil"></i><i class="fa fa-trash"></i>
                        </div>
                        <div class="col-md-9">
                           <a class="btn btn-sm bg-success" id="beneficiaireButton" onclick="beneParrain()" >
                              <small class="label pull-right bg-warning" style="font-size: 12px;" > <?php $qte = $core->qteLigne('beneficiaire','count(*) qte', NULL, NULL, NULL); echo $qte; ?>
                        
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
         <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Medium model</h4>
              </div>
              <div class="modal-body">
                <h4>Overflowing text to show scroll behavior</h4>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                The Europeas are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
     </div>


	</section>	    

  </div><!-- /.col -->
       
 
            
            
      
             
    
   </div>
</div>


     

        
    

 <?php
 include("../includes/footer.php");
 // include("includes/control_side_bar.php");
 include '../includes/script.php';

 ?> 
<script src="js/parrainage.js"></script>
<!-- ./wrapper -->
<script>
function beneParrain(){

  $.ajax({
  

data-target: "#myModal",   
      
data-toggle="modal"
});
}
  
</script>
</div>
</div>
</body>
</html>



        