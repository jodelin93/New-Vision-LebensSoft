<?php
	include ("PDOC.php");
	class Core extends PDOC{

		public $__conn;
		
		function __construct(){
			$this->_conn = PDOC::conn();
		}

		public function insertData($table, $field, $data){
			
			if (isset($field) and $field !="") {
				$field = implode(',', $field);
				$data = implode(',', $data);

				$sql = "INSERT into ".$table." (".$field.") "."VALUES"." (".$data.")";
				var_dump($sql); 
				$req = $this->_conn->prepare($sql);
				$req->execute();

				$msg = "insertion resussie";
				
			}else{
				$msg ="Insertion echouee";

			}
			
			return $msg;
			
		}


		public function selectData($table, $attribut, $condition, $fieldname, $fieldvalue){
			if (isset($fieldname)) {
				$nbr = sizeof($fieldname);
			}
			

 			if (isset($fieldname) and $nbr ==1) {
 				$sql = "SELECT * FROM ".$table. " WHERE ".$fieldname[0]."="."'".$fieldvalue[0]."'";

 				$stmt = $this->_conn->prepare($sql);
 			}elseif (isset($fieldname) and $nbr ==2) {
 				$sql = "SELECT * FROM ".$table. " WHERE ".$fieldname[0]."="."'".$fieldvalue[0]."'"." AND ".$fieldname[1]."="."'".$fieldvalue[1]."'";
 				$stmt = $this->_conn->prepare($sql);
 				
 			}elseif (isset($condition) and !empty($condition)) {
 				$sql = "SELECT * FROM ".$table." WHERE ".$condition;
 				// var_dump($sql);

 				$stmt = $this->_conn->prepare($sql);
 				//var_dump($sql);die;

 			}elseif (isset($attribut) and !empty($attribut)) {
 				$sql = "SELECT ".$attribut." FROM ".$table;
 				$stmt = $this->_conn->prepare($sql);
 				
 			}elseif (!empty($attribut) and !empty($condition)) {
 				$sql = "SELECT ".$attribut." FROM ".$table." WHERE ".$condition;
 				$stmt = $this->_conn->prepare($sql);
 			}
 			else{
 				$stmt = $this->_conn->prepare("SELECT * FROM ".$table);
 			}
                  
                $stmt->execute();  
                return $stmt->fetchAll(PDO::FETCH_OBJ);  
          
		}

				

				public function editData($table, $field, $data, $idname, $id){

				if (isset($field) and $field !="") {
					$req="";
					$nbr = sizeof($field);
					if ($nbr ==0) {
						$req = $field[$i]." = ".$data[$i];
					}
				for ($i=0; $i < $nbr; $i++) { 
					$req = $req."".$field[$i]." = ".$data[$i];
					
				}

					$sql = "UPDATE ".$table." set ".$req." WHERE ".$idname." = ".$id;
					// var_dump($sql);
					$req = $this->_conn->prepare($sql);
					$req->execute(); 
				
				//var_dump($sql);die;

		}

	}

		public function deleteData($table, $id){
			if (isset($table, $id)) {
				$sql = "delete from ".$table. " WHERE id_".$table." = ".$id;
				$req = $this->_conn->prepare($sql);
				$rep = $req->execute();
			}
			return ($rep);
		}

				public function qteLigne($table, $attr){

			// $count = "count(id_".$table.")";
 			$qteC = $this->selectData($table, $attr, NULL, NULL, NULL); 


			 	foreach ($qteC as $key) {
			      foreach ($key as $ke => $value) {
			         $val = $value;
			          }
			                     
			        }   
			 	// var_dump($qte);die;

			 	return $val;


 		}
	}


?>