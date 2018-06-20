<?php
include("../../class/Core.php");
$core = new Core();
$table = "bene_parrain_emp";
$id = $_GET['idBene'];
$idP = $_GET['idP'];
$co = "idBene='".$id."'";
$rek = $core->selectData('bene_parrain_emp', NULL, $co, NULL, NULL);
foreach ($rek as $key) {
	$statut =$key->statut;
}
if ($statut ==1) {
	$data = array(0);
}else{
	$data = array(1);
}
$field =array('statut');

$idname = "idBene = '".$id."' and idParrain";
$del = $core->editData($table, $field, $data, $idname, "'".$idP."'");
// $test = 1;
// include 'adminListe.php';
// var_dump($del);

?>