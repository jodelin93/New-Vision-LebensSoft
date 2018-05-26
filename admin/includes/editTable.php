<?php
include("../fonctions/Hotel.php");
$hotel = new Hotel();
$table = $_GET['table'];
$id = array($_GET['id']);
$idname = array("id_utilisateur");


// $desc = $hotel->descTable($table);
$info = $hotel->selectData($table, NULL, NULL, $idname, $id);

var_dump($info);
// var_dump($del);

?>