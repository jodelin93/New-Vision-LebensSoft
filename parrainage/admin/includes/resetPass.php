<?php
include("../../class/Core.php");
$core = new Core();
$table = $_GET['table'];
$id = $_GET['id'];
$field =array('password');
$pass = sha1('password');
$data = array("'$pass'");
$idname = "idEmp";
$del = $core->editData($table, $field, $data, $idname, "'".$id."'");
// var_dump($del);
$test = 1;
include 'adminListe.php';
?>