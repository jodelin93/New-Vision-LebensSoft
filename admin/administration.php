<?php
	$titre = "Administration";
	include "../includes/header.php";
	include "../class/Core.php";
	$i = 0;
	$core = new Core();
	$res = $core->selectData('employer',NULL, NULL, NULL, NULL);
	//var_dump($res);
		
	foreach($res as $key => $value){
		$i++;
	   echo $value->idEmp;
	}

?>

  <!-- Main content -->
    <section class="content">


        <div class="row">
         		

         		<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
    <button  class="btn btn-default" onclick="fonc('Ajouter un utilisateur')" data-toggle="modal" data-target="#modal-default">
      <span class="glyphicon glyphicon-user logo-small "></span>
      <h4>UTILISATEUR</h4>
    </button> 
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4>Employer</h4>
      
    </div>
    <div class="col-sm-4" id="te">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      
    </div>
  </div>
</div>

        </div>

         <div class="row">
         		

         	<div class="modal fade" id="modal-default">
		          <div class="modal-dialog">
		            <div class="modal-content">
		              <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                  <span aria-hidden="true">&times;</span></button>
		                <h4 class="modal-title" id="titre"></h4>
		              </div>
		              <div class="modal-body" id="content_form">
		               
		             
		              </div>
		              <div class="modal-footer">
		               
		              </div>
		           
		       </div>
		      </div>
		      </div> 

        </div>


		  
        
    </section>
    <!-- /.content -->
  </div>
 
<script src="../js/insertionadmin.js"></script>


<?php

	include"../includes/footer.php";
	 include '../includes/script.php';

?>