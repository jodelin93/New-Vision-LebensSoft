<?php
class PDOC{
	

	public function conn(){
	try{
		$db = new PDO('mysql:host=localhost;dbname=lebens_db', 'root', 'pablo001@@P');
		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		}

		return $db;
}
}
?>