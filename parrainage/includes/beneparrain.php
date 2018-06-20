       <?php 
       session_start();
include_once("../../class/Core.php");

            $ii=0;
            $core=new Core();
            // $condP = "beneficiaire.idBene=bene_parrain_emp.idBene and idParrain='".$_GET['idParrain']."'";
            // $select= $core->selectData("beneficiaire, bene_parrain_emp", NULL,  $condP, NULL, NULL);
                
            ?>
  <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1" data-toggle="tab">Ajouter Beneficiaire</a></li>
              <li><a href="#tab2" data-toggle="tab" onclick="listeBenePar('<?php echo $_GET['idParrain']; ?>')">Ses Beneficiaires</a></li>
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab1">
                <form class="form-group" id="AjouterFieulle" enctype="multipart/form-data">
                  <div class="form-group">
                      <label></label>
                     <input type="hidden" class="form-control" name="resultBene" id="resultBene">
                     <input type="hidden" class="form-control" name="messbene" id="messbene">
                     <input type="hidden" name="idParr" value="<?php echo $_GET['idParrain']; ?>">
                    <select class="form-control select2" name="nomfieulle" id="nationalite" multiple="multiple" data-placeholder="Selectionner les Beneficiaires" style="width: 100%;" required>
                
                    <?php
                    $conddd = "beneficiaire.idBene NOT IN (SELECT idBene from bene_parrain_emp WHERE idParrain='".$_GET['idParrain']."')";
                    $pays = $core->selectData("beneficiaire", NULL, $conddd, NULL, NULL);
                    foreach ($pays as $key) {
                     ?>
                    <option value="<?= $key->idBene ?>"><?php echo $key->prenom_ben." ".$key->nom_ben; ?></option>
                    <?php
                  }
                  ?>
                   </select>
                  </div>
                  <div class="form-group">
                    <label>Date de Parrainage</label>

                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="date" class="form-control pull-right" id="" name="dateParrainage">
                    </div>
                <!-- /.input group -->
                 </div>
                  <input type="submit" name="AjouterFieulle" class="btn btn-success btn-flat" value="Ajouter">
                </form>
                <div id="reponseRequete" class="pull-left"></div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab2">
              
              <div id="beneparraintable"></div>
       
              </div>
              <!-- /.tab-pane -->
            
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          
          <!-- nav-tabs-custom -->
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
  <script>


$("#AjouterFieulle").on('submit',(function(e) {
e.preventDefault();  
// alert('mw la');
$.ajax({	
url: "includes/insertPB.php", 
type: "POST",             
data: new FormData(this), 
contentType: false,       
cache: false,             
processData:false,       
success: function(data){
document.getElementById('reponseRequete').innerHTML= data;
// var srttt = document.getElementById('resultBene').value;
// alert('srttt');
// $('#tabs a[href="#tab_2"]').tab('show');
}
});
}));
    
function listeBenePar(str) {
  
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

          document.getElementById("beneparraintable").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("GET", "includes/listebenepar.php?idParrain=" + str, true);
  xmlhttp.send();

}

  function retirerBenePar(str) {
                    // alert("fdjkj");
                    var idP = '<?php echo $_GET['idParrain']; ?>';

                  var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("beneparraintable").innerHTML = this.responseText;
                            // $("#msgModParrain").html(this.responseText);
                            // $('#msgmodModal').modal('show');
                            // $('.infomodal').html(this.responseText);
                        }
                    };
                    xmlhttp.open("GET", "includes/retirerbenepar.php?idBene=" + str + "&idP=" + idP, true);
                    xmlhttp.send();
                    listeBenePar('<?php echo $_GET['idParrain']; ?>');
                }
  </script>