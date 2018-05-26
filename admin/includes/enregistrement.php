<?php


?>


<div class="row">
         		

         		<!-- Container (Services Section) -->
			<div id="services" class="container-fluid text-center">
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <div class="row slideanim">
			    <div class="col-lg-3 ">
			    <a  class="btn btn-app bg-success" onclick="utilisateurFonc('Utilisateur')" data-toggle="modal" data-target="#modal-utilisateur">
			    <span class="badge bg-purple"><?php $qte = $core->qteLigne('utilisateur','count(idEmp) qte', NULL, NULL, NULL);echo $qte;
			        ?></span>
			      <i class="fa fa-user"></i> Utilisateur
			      
			    </a> 

			    </div>
			    <div class="col-lg-3 ">
			    <a  class="btn btn-app bg-olive" onclick="employerFonc('Employer')" data-toggle="modal" data-target="#modal-employer">
			      <span class="badge bg-green"><?php $qte = $core->qteLigne('employer','count(idEmp) qte', NULL, NULL, NULL);echo $qte;
			        ?></span>
			      <i class="fa fa-users"></i> Employer
			     </a> 
			    </div>
			   
			     <div class="col-lg-3 ">
			    <a  class="btn btn-app bg-teal" onclick="maisonFonc('Maison')" data-toggle="modal" data-target="#modal-salle">
			      <span class="badge bg-blue"><?php $qte = $core->qteLigne('logement','count(*) qte', NULL, NULL, NULL);echo $qte;
			        ?></span>
			      <i class="fa fa-home"></i> Maison
			     </a>
			    </div>

			    <div class="col-lg-3 ">
			    <a  class="btn btn-app bg-blue" onclick="tauxFonc('Taux')" data-toggle="modal" data-target="#modal-taux">
			   
			      <i class="fa fa-money"></i> Taux
			     </a> 
			    </div>
			  </div>
			
			
			</div>

        </div>


			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>

			  <script>
  

</script>