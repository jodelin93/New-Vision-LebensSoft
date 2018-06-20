<?php
include("../../includes/constantes.php");
include("../../class/saveImage.php");
include("../../class/Core.php");

$ima = new Image();
$core = new Core();

$nom_par = $_POST['nom_par'];
$prenom_par = $_POST['prenom_par'];
$adresse_par = $_POST['adresse_par'];
$sexe = $_POST['sexe'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$profession = $_POST['profession'];
$etat_civil = $_POST['etat_civil'];
$nationalite = $_POST['nationalite'];
// $photo_parrain = $_POST['photo_parrain'];
$idParrain = $_POST['idParrain'];
$file = $_FILES["file"]["name"];  
$photovalue = $_POST['photovalue'];

if(isset($file) and $file != ""){
    
    $path= "../../avatars/";
    $save=$ima->saveImage($path);
    $photovalue=$_FILES["file"]["name"];  

}


    $field = array('nom_par', 'prenom_par', 'adresse_par', 'telephone', 'email', 'profession', 'etat_civil', 'nationalite', 'photo_parrain');
    $data = array("'".$nom_par."',", "'".$prenom_par."',", "'".$adresse_par."',", "'".$telephone."',", "'".$email."',", "'".$profession."',", "'".$etat_civil."',", "'".$nationalite."',", "'".$photovalue."'");
    $mod = $core->editData("parrain", $field, $data, "idParrain", "'".$idParrain."'");

echo "Les Informations du Parrain ont ete modifiees!"
?>






