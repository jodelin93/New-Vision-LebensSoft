<?php
//header("Content-Type: text/html; charset=iso-8859-1");
session_start();
include ("../class/Core.php");
if(isset($_SESSION['nom_user'])){
$user=$_SESSION['nom_user'];

	
	

	$core = new Core();
	

	$dv = NULL;
	$tv = NULL;
	$dsv = NULL;
	

//$core->closeCursor();

if (isset($_POST['datev'])) {

	$i = 0;

	
	$date = htmlspecialchars($_POST['datev']);

	$titre = htmlspecialchars($_POST['titrev']);
	$desc = htmlspecialchars($_POST['descv']);
	
	


			
	
	if (empty($date)) {
		$ii=$i+1;
		$dv = "$ii - la date de l'evenement ne doit pas etre vide</br>";
		$i++;
	}

	if (empty($titre)) {
		$ii=$i+1;
		$tv = "$ii- le titre ne doit pas etre vide</br>";
		$i++;
	}

	if (empty($desc)) {
		$ii=$i+1;
		$dsv = "la description  ne doit pas etre vide</br>";
		$i++;
	}
	

	if ($i==0) {

			$id=0;

$dates=Date('Y-m-d H:m:s');
	$field = array('id','date_event','titre','description','user','date_create');

	$data = array("".$id."","'".$date."'","'".$titre."'", "'".$desc."'","'".$user."'","'".$dates."'");

	
	$ins = $core->insertData('event', $field, $data);

	echo"Succes";
	

	}else{
		echo "Il y a ".$i."  erreur(s) </br>";
		echo $dv;
		echo $tv;
		echo $dsv;
	//	echo "$user";
	

	}
	

}
}


?>