<?php
	include ("class/Core.php");
	include ("saveImage.php");

	$core = new Core();
	$ima=new Image();



	$type_bene_erreur = NULL;
	$nom_err = NULL;
	$pnom_err = NULL;
	$nom_parent_err = NULL;
	$sexe_err = NULL;
	$idd=NULL;


if (isset($_POST['prenom_bene'])) {

	$i = 0;

	$path="../images/beneficiaire";

	

	$nom = htmlspecialchars($_POST['nom_bene']);
	$type_bene = htmlspecialchars($_POST['type_bene']);
	$prenom_bene = htmlspecialchars($_POST['prenom_bene']);
	$sexe_bene = htmlspecialchars($_POST['sexe_bene']);
	$dat_naiss_bene = htmlspecialchars($_POST['dat_naiss_bene']);
	$adr_bene = htmlspecialchars($_POST['adr_bene']);
	$etat_civil_bene = htmlspecialchars($_POST['etat_civil_bene']);
	$maison = htmlspecialchars($_POST['maison_bene']);
	$niveau = htmlspecialchars($_POST['niveau_etude_bene']);
	$info_sup = htmlspecialchars($_POST['info_sup_bene']);
	$etat_sante = htmlspecialchars($_POST['etat_sante_bene']);
	
	$cin = htmlspecialchars($_POST['nifcin']);
	//$view = "lister";
	
	//$nif = htmlspecialchars($_POST['nif']);
	$logement = htmlspecialchars($_POST['logement_bene']);
	$nom_parent = htmlspecialchars($_POST['nom_parent']);


			$table="beneficiaire";
			$id="count(idBene) as id";
					
			$select= $core->selectData($table, $id, NULL, NULL, NULL);
				
				foreach ($select as $res_rek) {
       
					$idd = $res_rek->id;
					
				}
	
	if (empty($nom)) {
		$ii=$i+1;
		$nom_err = "$ii - le nom ne doit pas etre vide</br>";
		$i++;
	}

	if (empty($prenom_bene)) {
		$ii=$i+1;
		$pnom_err = "$ii- le prenom ne doit pas etre vide</br>";
		$i++;
	}

	if (empty($type_bene)) {
		$type_bene_erreur = "Veuillez choisir le type de beneficiaire</br>";
		$i++;
	}
	

	if (empty($sexe_bene)) {
		$sexe_err = "Veuillez choisir le sexe du beneficiaire</br>";
		$i++;
	}
	
	if (empty($nom_parent)) {
		$ii=$i+1;
		$nom_parent_err = "$ii- Le nom du parent ne doit pas etre vide</br>";
		$i++;
		
	
	}
	
	if ($i==0) {

			
	$save=$ima->saveImage($path);
	$f=$_FILES["file"]["name"];

	$temp="ORP-00$idd";
	$field = array('idBene','nom_ben','prenom_ben','adresse_ben','sexe','date_nais','typeBene','nom_parent', 'nif', 'statut','photo','niveau_etude','nomLoge');
	$data = array("'".$temp."'","'".$nom."'","'".$prenom_bene."'", "'".$adr_bene."'", "'".$sexe_bene."'", "'".$dat_naiss_bene."'", "'".$type_bene."'", "'".$nom_parent."'", "'".$cin."'", "'".$etat_civil_bene."'", "'".$f."'", "'".$niveau."'", "'".$logement."'");

	
	$ins = $core->insertData('beneficiaire', $field, $data);

	echo"Inscription reussie";
	//header("loaction:index.php");

	}else{
		echo "Il y a ".$i."  erreur(s) </br>";
		echo $type_bene_erreur;
		echo $nom_err;
		echo $pnom_err;
		echo $nom_parent_err;
		echo $sexe_err;
		

	}
	

}



?>