   
           <?php
         
            include_once("../../class/Core.php");
            $id = $_GET['idParrain'];
            $core = new Core();
                      
        ?>
    <option selected disabled></option>
    
     <?php
       $cond = "beneficiaire.idBene = bene_parrain_emp.idBene and parrain.idParrain=bene_parrain_emp.idParrain and bene_parrain_emp.idParrain = '".$id."'";
       $bene = $core->selectData("beneficiaire, parrain, bene_parrain_emp", NULL, $cond, NULL, NULL); 
       foreach($bene as $infob){
     ?>
     <option value="<?= $infob->idBene; ?>"><?php echo $infob->nom_ben." ".$infob->prenom_ben; ?> </option>
     <?php
     }
    
     ?>
