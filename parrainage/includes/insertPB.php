<?php 
	include ("../../class/Core.php");
	
// include 'Hotel.php';
	$core = new Core();
	$er = 0;
	$msg = NULL;
if (isset($_POST['nomfieulle']) and $_POST['nomfieulle']!="") {
	
			$nombene = $_POST['nomfieulle'];
			// echo $_POST['dateParrainage'];
			if($_POST['dateParrainage']==""){
				$er++;
				$msg = $msg." Veuillez saisir la date!";
				
			}else{
				$dateP = $_POST['dateParrainage'];
			}
			
			if(isset($_POST['idParr'])){
			$idParrain = $_POST['idParr'];
			}else{
				$er++;
				$msg = $msg." Une erreur est survenue lors de l'enregistrement!";
			}

			
	

	// $des="desactiver";
	if($er == 0){
			$resu='Enregistrement Reussi';
			$fieldd = array("idParrain","idBene","dateParrainage");
			$data = array("'".$idParrain."'","'".$nombene."'","'".$dateP."'");
			$insert = $core->insertData('bene_parrain_emp', $fieldd, $data);
			echo $resu;
	}else{
			echo "<h5 style='color:red'>Enregistrement Echoue</h5>";
		}
		
			

         

	
		

}

?>