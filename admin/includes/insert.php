<?php
	include_once ("../../class/Core.php");
	include ("../../class/saveImage.php");

	// $core = new Core();
	$ima=new Image();

// include 'Hotel.php';
$core = new Core();


	
if (isset($_POST['id_emp'])) {
	

	if (isset($_POST['pwd']) and isset($_POST['droit']) and isset($_POST['etat'])) {
		
	$id_emp = $_POST['id_emp'];
	$nom_util = $_POST['nom_util'];
	$pwd = sha1($_POST['pwd']);
	$droit = $_POST['droit'];
	$branche = $_POST['branche'];
	$etat = $_POST['etat'];
	// $foto = $_FILES["file"]["name"];
	

	$path="../avatars";
	$save=$ima->saveImage($path);
	$foto=$_FILES["file"]["name"];
	if (empty($foto)) {
		$foto = "photo.png";
	}
			// $target_dir = "./avatars/";
			// $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
			// $uploadOk = 1;
			// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// // Check if image file is a actual image or fake image
			
			//     // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			//     // if($check !== false) {
			//     //     echo "File is an image - " . $check["mime"] . ".";
			//     //     $uploadOk = 1;
			//     // } else {
			//     //     echo "File is not an image.";
			//     //     $uploadOk = 0;
			//     // }
			
			// // Check if file already exists
			// if (file_exists($target_file)) {
			//     echo "Sorry, file already exists.";
			//     $uploadOk = 0;
			// }
			// // Check file size
			// if ($_FILES["fileToUpload"]["size"] > 500000) {
			//     echo "Sorry, your file is too large.";
			//     $uploadOk = 0;
			// }
			// // Allow certain file formats
			// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			// && $imageFileType != "gif" ) {
			//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			//     $uploadOk = 0;
			// }
			// // Check if $uploadOk is set to 0 by an error
			// if ($uploadOk == 0) {
			//     echo "Sorry, your file was not uploaded.";
			// // if everything is ok, try to upload file
			// } else {
			//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			//         echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			//     } else {
			//         echo "Sorry, there was an error uploading your file.";
			//     }
			// }


		$field = array('idEmp','login','password','droit','etat','photo');
		$data = array("'".$id_emp."'","'".$nom_util."'","'".$pwd."'","'".$droit."'","'".$etat."'","'".$foto."'");

		$ins = $core->insertData('utilisateur', $field, $data);
		if ($ins) {
			echo "Enregistrement reussi";
			echo "
			<script>
			setTimeout(function(){window.location.reload();},5000);
			</script>
			";
		}else{
		 echo "Enregistrement echoue";
		}
	}else{
		echo "Tous les champs doivent etre remplis!";
	}
}

if (isset($_POST['pnom_emp'])) {
	
if (isset($_POST['nom_emp']) and isset($_POST['fonction']) and isset($_POST['etat'])) {
	
	$pnom = $_POST['pnom_emp'];
	$cin = $_POST['cin_emp'];
	$adr = $_POST['adr_emp'];
	$tel = $_POST['tel_emp'];
	$email = $_POST['email_emp'];
	$pos = $_POST['fonction'];
	$eta = $_POST['etat'];
	$dat_naiss = $_POST['dat_naiss'];
	$etat_civil = $_POST['etat_civil'];
	$nbre_enf = $_POST['nbre_enf'];
	$departement = $_POST['departement'];
	$salaire = $_POST['salaire'];
	$niveau = $_POST['niveau'];
	$etat = $_POST['etat'];
	$formationP = $_POST['formationP'];
	$autre_comp = $_POST['autre_comp'];
	$pers_cont = $_POST['pers_cont'];
	$date_entre = $_POST['date_entre'];
	$sexe = $_POST['sexe'];
	$exp =$_POST['exp'];

	$path="../../avatars";
     $save=$ima->saveImage($path);
	$f=$_FILES["file"]["name"];  
	if (empty($f)) {
		$f = "photo.png";
	}


	$code = $core->qteLigne('employer', 'count(idEmp)');
	$code +=1;
	$code = substr($_POST['nom_emp'], 0, 3);
	$qte = $core->qteLigne('employer', 'count(idEmp)');
	$code = $code.$qte;
	// echo $code;
	$field = array('idEmp', 'nom_emp', 'prenom_emp', 'nif', 'adresse_emp', 'telephone', 'email', 'fonction', 'statut','sexe','departement','salaire','date_de_nais','etat_civil','nbre_enfant','niveau_etud','formation_professionelle','autres_competences','date_entre','experience_hors_mission','personne_de_contact','photo');
	$data = array("'".$code."'", "'".$_POST['nom_emp']."'", "'".$pnom."'", "'".$cin."'", "'".$adr."'", "'".$tel."'", "'".$email."'", "'".$pos."'", "'".$eta."'","'".$sexe."'","'".$departement."'","'".$salaire."'","'".$dat_naiss."'","'".$etat_civil."'",$nbre_enf,"'".$niveau."'","'".$formationP."'","'".$autre_comp."'","'".$date_entre."'","'".$exp."'","'".$pers_cont."'","'".$f."'");

	$ins = $core->insertData('employer', $field, $data);
		if ($ins) {
			echo "Enregistrement reussi";
			echo "
			<script>
			setTimeout(function(){window.location.reload();},5000);
			</script>
			";
		}else{
		 echo "Enregistrement echoue";
		}
}else{
	echo "Ces quatres (4) champs( Nom, Prenom, Poste, Statut) sont obligatoires";
}
}



if (isset($_POST['id_chmb'])) {
	if (isset($_POST['prix']) and isset($_POST['nbre_lit']) and isset($_POST['tel_chmb'])) {

		$id = $_POST['id_chmb'];
		$nbre_lit = $_POST['nbre_lit'];
		$prix = $_POST['prix'];
		$tel_chmb = $_POST['tel_chmb'];

		$field = array("id_bungalow", "nbre_lit", "prix_bungalow", "tel_bung");
		$data = array("'".$id."'", "'".$nbre_lit."'", "'".$prix."'", "'".$tel_chmb."'");


		$ins = $core->insertData('bungalow', $field, $data);
		if ($ins ==1) {
			echo "Enregistrement reussi";
		}else{
		 echo "Enregistrement echoue";
		}
	}else{
		echo "Tous les champs sont obligatoires!";
	}
}




 


        if (isset($_POST['achat']) and isset($_POST['vente'])) {
        	$vente = $_POST['vente'];
        	$achat = $_POST['achat'];

        	$field = array("achat", "vente");
        	$data = array($achat, $vente);

        	$ins = $hot->insertData('taux', $field, $data);
					if ($ins ==1) {
						echo "Enregistrement reussi";
					}else{
					 echo "Enregistrement echoue";
					}
        }
?>

