<!DOCTYPE html>
<html>
	
		<?php
			$titre = "Orphelinat";
			require("../includes/header.php");

		?>
		
		<section class="content">

			<div class="row">
		
				   <!-- Custom Tabs -->
		          <div class="nav-tabs-custom">
			
			  <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Menu</a></li>
              <li><a href="#tab_2" data-toggle="tab">Beneficiaire</a></li>
              <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
			
		            <div class="tab-content">

		            	<!-- Main Orphelinat -->
						
		              <div class="tab-pane active" id="tab_1">
		              	 <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <h4>Beneficiaire</h4>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
        <a class="small-box-footer bene"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Gestion</h3>

              <p>Ressources Humaines</p>
            </div>
            <div class="icon">
              <i class="fa  fa-male"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Gestion</h3>

              <p>Congé</p>
            </div>
            <div class="icon">
              <i class="fa fa-bed"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Gestion</h3>

              <p>Dossiers Personnels</p>
            </div>
            <div class="icon">
              <i class="fa  fa-archive"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Gestion</h3>

              <h4>Evaluation</h4>
            </div>
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
        <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Gestion</h3>

              <p>Presence</p>
            </div>
            <div class="icon">
              <i class="fa  fa-male"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Gestion</h3>

              <p>Rapports</p>
            </div>
            <div class="icon">
              <i class="fa fa-folder-open"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Gestion</h3>

              <p>Logistique / Technique </p>
            </div>
            <div class="icon">
              <i class="fa  fa-wrench"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
		</div>
						
					  
		              	<!-- Fin Main Orphelinat -->

		              	<!-- Orphelinat Inscription -->
						
		            
					 
		              <!-- Fin Orphelinat Inscription -->
		
			    <div class="tab-pane" id="tab_3">
               hello
		            </div>
 
		              <div class="tab-pane" id="tab_2">
					  <div class="box">
					  <div class="col-lg-2" style="float:right;"><a href="#"> <button class="col-xs-12 btn btn-warning"  data-toggle="modal" data-target="#modal-default"><i class="fa fa-user-plus"></i> Ajouter</button></a></div><hr>
           
		   <div class="box-header">
			
              <h3 class="box-title">La liste de beneficiaires</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Code</th>
                  <th>Prenom</th>
                  <th>Nom</th>
                  <th>Sexe</th>
                  <th>Date de naissance</th>
				   <th>Parrain</th>
				    <th><i class="fa  fa-pencil"></i></th>
				    <th><i class="fa  fa-eye"></i></th>
					
					
                </tr>
                </thead>
                <tbody >
                <i><?php include("listebeneficiare.php");?></i>
				
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
				  
		              </div>
						
		          </div>

			</div>
			
		

		<!--//Modal Inscription-->	
	
			
	</body>
	
	</div>
	</section>
	<div id="clooos">
	<div class="modal fade" id="modal-default">
	
          <div class="modal-dialog">
		  
            <div class="modal-content" style="width:900px; right:25%;">
			
			 <div class="alert alert-danger alert-dismissible" id="viewwong">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
				<span id="error"></span>
              </div>
			   <div class="alert alert-success alert-dismissible" id="viewsuc">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
				<span id="success"></span>
              </div>
			  
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Enregistrement d'un beneficiaire</h4>
              </div>
              <div class="modal-body">
                 <div class="row">
			  
						<div id="result"></div>
		              	<form action="#" method="POST"  id="Insertdata" enctype="multipart/form-data">
		              		<fieldset class="col-lg-4">
							<label>Type Beneficiare</label>
		              			<select class="form-control" id="type_bene" name="type_bene">
		              				<option value="null"></option>
		              				<option>Orphelin</option>
		              				<option>Parraine</option>
		              			</select>

		              			<br>

		              			
		              			<label>Prenom Beneficiare</label>
		              			<input type="text"  id="prenom_bene" name="prenom_bene" class="form-control">

		              			<label>Nom Beneficiare</label>
		              			<input type="text" id="nom_bene" name="nom_bene" class="form-control">

		              			<br>

		              			<select class="form-control"  id="sexe_bene" name="sexe_bene">
		              				<option>***Sexe***</option>
		              				<option>Feminin</option>
		              				<option>Masculin</option>
		              			</select>

		              			<br>

		              			<label>Date de Naissance</label>
		              			<input type="text" id="dat_naiss_bene" name="dat_naiss_bene" class="form-control">

		              			<label>Adresse Beneficiaire</label>
		              			<input type="text"  id="adr_bene" name="adr_bene" class="form-control">
								<label>Nom du responsable</label>
		              			<input type="text"  id="nom_parent" name="nom_parent" class="form-control">

		              			<br>
		              			<select class="form-control" id="etat_civil_bene" name="etat_civil_bene">
		              				<option>***Etat Civil***</option>
		              				<option>Celibataire</option>
		              				<option>Marie</option>
		              				<option>Divorce</option>
		              			</select>
		              			<br>
		              			

		              		</fieldset>

		              		<fieldset class="col-lg-4">

		              			
		              			<input type="radio" id="cin" name="cin" for="nifcin" value="Nif">
		              			<label>Nif</label>
		              			<input type="radio" id="cin" name="cin" for="nifcin" value="Cin">
		              			<label>Cin</label>
		              			<input type="text" id="nifcin" name="nifcin" class="form-control" placeholder="Nif ou Cin">

		              			
		              			<br>
		              			
		              			<select class="form-control" id="niveau_etude_bene" name="niveau_etude_bene">
		              				<option>***Niveau d'etude***</option>
		              				<option>Primaire</option>
		              				<option>Secondaire</option>
		              				<option>Universitaire</option>
		              			</select>

		              			<br>

		              			<select class="form-control"  id="maison_bene" name="maison_bene">
		              				<option>***Maison***</option>
		              				<option>Louee</option>
		              				<option>Achetee</option>
		              			</select>

		              			<br>
		              			<select class="form-control" id="logement_bene" name="logement_bene">
		              				<option>***Logement***</option>
		              			</select>
		              			<br>

		              			<label>Etat Sante</label>
		              			<textarea class="form-control" id="etat_sante_bene" name="etat_sante_bene"></textarea>

		              			<label>Information Suplementaire</label>
		              			<textarea class="form-control" id="info_sup_bene" name="info_sup_bene"></textarea>

		              			<br>
		              			<br>
		              			
		              		</fieldset>

		              		<fieldset class="col-lg-4">
		              			
			              			<input type="text"  id="id_bene" name="id_bene" class="form-control" disabled="" placeholder="Id Beneficiaire">
		              			
		              			<br>
		              			<br>
		              		
		              			<div class="col-lg-offset-3 col-lg-6" >
		              				<img src="" id="previewing" width="100%">
		              			</div>
							
							
		              			<input type="file" name="file" id="file" style="display:none;">
								<label for='file' align="center"><i class="fa fa-camera fa-3x" style='position:absolute; left:40%;'></i></label>
								
		              		
								<div  id="message" style="width:100%;"></div>
		              		<br>
		              		<br>
		              		<br>
		              		<br>
		              		<br>
		              		<br>
		              			<div class="row col-md-12">
			              			<input type="reset" name=""  class="btn btn-danger col-xs-6">
			              			<input type="submit" id="rese" class="btn btn-success col-xs-6">
		              			</div>

		              		</fieldset>
		              	</form>
		              </div>
              </div>
             
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
		 </div>
</div>


	 <?php
	 	 include("../includes/footer.php");
		 include("../includes/control_side_bar.php");
		 include ('../includes/script.php');
	 ?> 

</html>
