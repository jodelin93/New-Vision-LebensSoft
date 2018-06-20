<?php 
	include ("../../class/Core.php");
	
// include 'Hotel.php';
	$core = new Core();
	$er = 0;
	$msg = NULL;
if (isset($_POST['employerId'])) {
	
           $idEmp= $_POST['employerId'];
			// echo $_POST['dateParrainage'];
			if($_POST['dateHeure']==""){
				$er++;
				$msg = " Veuillez saisir la Date et l'Heure!";
			
			}else{
                $date = $_POST['dateHeure'];
                $date = date_create($date);
                $date = date_format($date,"Y-m-d");
			}
			
			if(isset($_POST['inout'])){
                $io = $_POST['inout'];
                if($io == "Entrée"){
                    $date = $_POST['dateHeure'];
                    $date = date_create($date);
                    $date = date_format($date,"Y-m-d H:i:s");
                    $entre= "'".$date."'";
                    $sortie = NULL;

                    $con = "id_presence=(select max(id_presence) from presence where idEmp='".$idEmp."')";
                    $veri = $core->selectData('presence',NULL, $con, NULL, NULL);

                    foreach ($veri as $value) {
                        $srt = $value->sortie;
                        $ent = $value->entree;
                       if ($srt!=NULL) {
                       
                        $fieldd = array("idEmp","entree", "dateP");
                        $data = array("'".$idEmp."'",$entre,"'".$date."'");
                       }else{
                        $er++;
                         echo "Un employer ne peut pas entrer deux fois de suite sans n'avoir jamais sorti";
                       }
                    }

                    if($veri == NULL){
                        $fieldd = array("idEmp","entree", "dateP");
                        $data = array("'".$idEmp."'",$entre,"'".$date."'");
                    }
                  
                }elseif ($io=="Sortie") {
                    $date = $_POST['dateHeure'];
                    $date = date_create($date);
                    $date = date_format($date,"Y-m-d H:i:s");
                    $entre= NULL;
                    $sortie = "'".$date."'";

                    $con = "id_presence=(select max(id_presence) from presence where idEmp='".$idEmp."')";
                    $veri = $core->selectData('presence',NULL, $con, NULL, NULL);
                   
                    foreach ($veri as $value) {
                        $srt = $value->sortie;
                        $ent = $value->entree;
                       if ($srt==NULL) {

                        $con = "idEmp='".$idEmp."'";
                        $maxid = $core->selectData('presence','max(id_presence) mId', $con, NULL, NULL);
                        foreach ($maxid as $value) {
                           $max = $value->mId;
                        }
                        $field = array('sortie');
                        $data= array($sortie);
                        $er++;
                       $edt = $core->editData('presence', $field, $data, 'id_presence', $max);
                    //   $fieldd = array("idEmp","sortie", "dateP");
                    // $data = array("'".$idEmp."'",$sortie,"'".$date."'");
                        echo "Enregistrement Reussi";
                       }else{
                        $er++;
                         echo "Un employer ne peut pas sortir deux fois de suite sans n'avoir jamais entrer";
                       }
                    }

                    if($veri == NULL){
                        $er++;
                        echo "Cette personne n'est jamais entree";
                    }
                 
                }
			}else{
				$er++;
				$msg = $msg." Une erreur est survenue lors de l'enregistrement!";
			}

			
          


	// $des="desactiver";
	if($er == 0){
			$msg= 'Enregistrement Reussi';
			// $fieldd = array("idEmp","entree","sortie", "dateP");
			// $data = array("'".$idEmp."'",$entre,$sortie,"'".$date."'");
			$insert = $core->insertData('presence', $fieldd, $data);
			// echo $msg;
	}
			

         
echo $msg;
	
		

}else{
    echo "Veuillez choisir l'employer";
}

?>