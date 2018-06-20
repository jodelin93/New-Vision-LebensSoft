<?php 
	include ("../../class/Core.php");
	include ("../../includes/saveImage.php");
	$er=0;
	$ima=new Image();
	$core = new Core();

if (isset($_POST['destinateur']) and isset($_POST['emetteur'])) {

			$emet = $_POST['emetteur'];
	if(isset($_POST['parrainname']) and isset($_POST['benename'])){
			if($emet == 'ep'){
				$emet = $_POST['parrainname'];
				$dest = $_POST['benename'];
			}elseif($emet == 'eb'){
				$emet = $_POST['benename'];
				$dest = $_POST['parrainname'];
			}
	}else{
		echo "Veuillez choisir l'emetteur et le destinateur";
		$er++;
	}

	if($_POST['date']==""){
		$er++;
		echo 'Veuillez choisir la Date';
	}
		
	$path="../lettres/";
	$save=$ima->saveImage($path);
	$f=$_FILES["file"]["name"]; 
	
	if($f ==""){
		$er++;
		echo "Veuillez Upload la Lettre";
	}
	if($er==0){
			$t = substr($emet, 0, 3);
			if($t=="PAR"){
				$idpb = $emet."/".$dest;
			}else{
				$idpb = $dest."/".$emet;
			}
			
			$fieldd = array("destinateur","expediteur","lettre", "date","id_par_ben");
			$data = array("'".$dest."'","'".$emet."'","'".$f."'","'".$_POST['date']."'","'".$idpb."'");
			$insert = $core->insertData('lettre', $fieldd, $data);

		if ($insert) {
		
			echo "Enregistrement Reussi";
		}else{
			echo "<h5 style='color:red'>Enregistrement Echoue</h5>";
		}
	
		
	}	

         

	
		

}else{
	echo "Veuillez cocher Emetteur ou Destinateur";
	$er++;
}

?>