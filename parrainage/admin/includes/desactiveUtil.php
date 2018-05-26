<?php
include("../../class/Core.php");
$core = new Core();
$table = $_GET['table'];
$id = $_GET['id'];
$field =array('etat');
$data = array("'Desactiver'");
$idname = "idEmp";
$del = $core->editData($table, $field, $data, $idname, "'".$id."'");

$test = 1;
include 'adminListe.php';
?>