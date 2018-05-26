<?php
$titre = "Employer";
	include "../includes/header.php";
	include "../class/Core.php";

	$i = 0;
	$core = new Core();
	$cond = "idEmp = '".$_GET['employer']."'";
	$res = $core->selectData('employer',NULL, $cond, NULL, NULL);
	//var_dump($res);
		
	foreach($res as $key => $value){
		$i++;
	   // echo $value->idEmp;
	
  

?>

	<br>
    <div class="row">
    <section class="col-lg-12">

    	<div class="panel" id="corpsss">

    		<div class="row">
    			<div class="w3-center">
    				<img src="../images/lebens_logo_min.png" width="200">
    			</div>
    		</div>
    			
    				<div class="">
    					<div class="w3-center">
    						<h5>8, Rue Christophe prolongee, route Praville, Gonaives</h5>
    					</div>
    				</div>
    					<div class="">
	    					<div class="w3-center">
	    						<h5><b>Telephones :</b> 2228 7317 / 2228 7293 / 3814 4358</h5>
	    					</div>
    					</div>

    				<div class="">
    					<div class="w3-center">
    						<h5><b>Courriels :</b> missivi67@gmail.com / walmic9@yahoo.fr</h5>
    					</div>
    				</div>

    				<hr style="border: 1px solid #000; margin: 0px;">
    				<b><h3 class="w3-center">Dossier Personnel</h3></b>

    				<div class="row">
    					
    					<div class="row">

    						<div class="col-xs-7" style="margin-left: 8%;">
    							<h5><b>Nom / Siyati : </b><span style="border-bottom: 1px dashed #000;"><?= $value->nom_emp ?></span></h5>
    							<h5><b>Prenom / non : </b><span style="border-bottom: 1px dashed #000;"><?= $value->prenom_emp ?></span></h5>
    							<h5><b>Adresse / Adres : </b><span style="border-bottom: 1px dashed #000;"><?= $value->adresse_emp ?></span></h5>
    							<h5><b>Telephone / Telefon : </b><span style="border-bottom: 1px dashed #000;"><?= $value->telephone ?></span></h5>
    							<h5><b>Date de Naissance / Dat ou fet : </b><span style="border-bottom: 1px dashed #000;"><?= $value->date_de_nais ?></span></h5>
    							<h5><b>NIF / Idantite : </b><span style="border-bottom: 1px dashed #000;"><?= $value->nif ?></span></h5>
    							<h5><b>Etat Civil / Eta sivil : </b><span style="border-bottom: 1px dashed #000;"><?= $value->etat_civil ?></span></h5>
    								<h5><b>Nombre d'enfants / Kantite Pitit : </b><span style="border-bottom: 1px dashed #000;"><?= $value->nbre_enfant ?></span></h5>
    							<h5><b>Niveau d'Etudes / Nan ki klas ou rive : </b><span style="border-bottom: 1px dashed #000;"><?= $value->niveau_etud ?></span></h5>
    							<h5><b>Formations Professionnelles /Fomasyon Pwofesyonel : </b><span style="border-bottom: 1px dashed #000;"><?= $value->formation_professionelle ?></span></h5>
    							<h5><b>Autres Competences / Lot bagay ou konn fe : </b><span style="border-bottom: 1px dashed #000;"><?= $value->autres_competences ?></span></h5>
    							<h5><b>Departement / Depatman : </b><span style="border-bottom: 1px dashed #000;"><?= $value->departement ?> </span></h5>
    							<h5><b>Fonction / Fonksyon : </b><span style="border-bottom: 1px dashed #000;"><?= $value->fonction ?></span></h5>

    							<h5><b>Date d'entree / Dat ou antre : </b><span style="border-bottom: 1px dashed #000;"><?= $value->date_entre ?></span></h5>
    							<h5><b>Experience hors Mission de Vie / Lot eksperyans ou : </b><span style="border-bottom: 1px dashed #000;"><?= $value->experience_hors_mission ?></span></h5>
    							<h5><b>Personne de Contact / Moun pwoch ou nou ka kontakte : </b><span style="border-bottom: 1px dashed #000;"><?= $value->personne_de_contact ?></span></h5>

    						</div>
    						<div class="col-xs-3 w3-right " style="margin-right: 8%;">
    							<img src="../avatars/<?= $value->photo ?>" style="width: 100%;" class="w3-padding-16">
    						</div>
    					</div>



    					
    					<br>
    					<br>
    					<div class="row">
    						<div class="col-xs-10"  style="margin-left: 8%;">
    							<div class="col-xs-3 w3-right" style="border-top: 2px solid #000;">
    								<h4 class="w3-center" >Signature</h4>
    							</div>
    							
    						</div>
    						
    					</div>

    				</div>
    				
    			</div>
    			
    		</div>
    		
 

    	<?php
    }
    		// foreach ($res as $key) {
    		// 	// var_dump($key);
    		// }
    	?>


    	<div class="row">

    	<button onclick="down()" class="btn btn-primary w3-right" style="margin-right: 5%;"><i class="fa fa-print"></i> Imprimer</button>

    </div>

    </section>
	</div>

<?php
include"../includes/footer.php";
?>

<script type="text/javascript">

   function down(){
   var printContents = document.getElementById("corpsss").innerHTML;   
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;  
   window.print();     
  document.body.innerHTML = originalContents;

}




</script>
