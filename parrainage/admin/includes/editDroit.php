<?php
include("../../class/Core.php");
$core = new Core();
$table = $_GET['table'];
$id = $_GET['id'];
$droit = $_GET['droit'];

if ($droit =="Administrateur") {
	$data = array("'utilisateur'");
}else{
	$data = array("'Administrateur'");
}
$field =array('droit');

$idname = "idEmp";
$del = $core->editData($table, $field, $data, $idname, $id);
$test = 1;
include 'adminListe.php';


?>