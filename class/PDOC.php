<?php
class PDOC{
	

	public function conn(){
	try{
		$db = new PDO('mysql:host=127.0.0.1;dbname=lebens_db', 'root', 'P@ssword');
		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		}

		return $db;
}
}
?>