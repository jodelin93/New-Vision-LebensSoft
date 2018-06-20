<?php
//header("Content-Type: text/html; charset=iso-8859-1");
	include ("../../class/Core.php");
	include ("../../includes/saveImage.php");

	// $core = new Core();
	$ima=new Image();

// include 'Hotel.php';
	$core = new Core();
	$er= 0;


if (isset($_POST['nom_par']) and $_POST['nom_par']!="") {
	
			$id = $core->selectData("parrain", "count(*) qtep", NULL, NULL, NULL);
				foreach ($id as $key => $value) {
				  foreach ($value as $ke) {
				    $id = $ke + 1;
				  }

			 $id = intval($id);
			 // $id_com += 1;
			}

			$idParrain = "PAR-".$id;
			$nom_par = $_POST['nom_par'];
			$prenom_par = $_POST['prenom_par'];
			$adresse_par = $_POST['adresse_par'];
			$sexe = $_POST['sexe'];
			$telephone = $_POST['telephone'];
			$email = $_POST['email'];
			$profession = $_POST['profession'];
			$etat_civil = $_POST['etat_civil'];
			$nationalite = $_POST['nationalite'];
			$veri = NULL;
			$conditio = "email= "."'".$email."'"." ";

			$select= $core->selectData("parrain", NULL,  $conditio, NULL, NULL);
                
                foreach ($select as $res_rek) {
                   $veri= $res_rek->email;
        		}

         if ($veri==$email) {
         	echo "<h5 style='color:red'>Deux Parrains ne peuvent pas avoir le meme E-mail!</h5>";
         	$er ++;
         }else{

         	$path="../../avatars/";
   			$save=$ima->saveImage($path);
			$f=$_FILES["file"]["name"];  
			if (empty($f)) {
			$f = "photo.png";
		}


	

	// $des="desactiver";
			$resu="Enregistrement Reussi";

			$fieldd = array("idParrain","nom_par","prenom_par","adresse_par","sexe","telephone","email","profession","etat_civil","nationalite","photo_parrain");
			$data = array("'".$idParrain."'","'".$nom_par."'","'".$prenom_par."'","'".$adresse_par."'","'".$sexe."'","'".$telephone."'","'".$email."'","'".$profession."'","'".$etat_civil."'","'".$nationalite."'","'".$f."'");
			$insert = $core->insertData('parrain', $fieldd, $data);

		if ($insert) {
			echo "<h5 style='color:green'>".$resu."</h5>";
		}else{
			echo "<h5 style='color:red'>Enregistrement Echoue</h5>";
		}
		
			

         }

	
		

}




?>



