<?php
    include("../../class/core.php");
    $core = new Core();
               $attt = "id_par_ben, MAX(prenom_ben) prenom_ben, MAX(nom_ben) nom_ben, MAX(prenom_par) prenom_par, MAX(nom_par) nom_par, COUNT(id_par_ben) qteM";
                 $cod = "1 group by id_par_ben";
                 $att = "id_par_ben, count(id_par_ben) qteM";
                 $co = "beneficiaire.idBene=lettre.expediteur AND parrain.idParrain=lettre.destinateur
                 OR beneficiaire.idBene=lettre.destinateur AND parrain.idParrain=lettre.expediteur GROUP by id_par_ben";
                 $correspondant = $core->selectData("parrain, lettre, beneficiaire", $attt, $co, NULL, NULL);
                 foreach ($correspondant as $key) {
                 
               ?>
               <li class=""><a onclick="conversation('<?php echo $key->id_par_ben; ?>')" href="#"><i class=''> </i><?php echo $key->prenom_par." <i class='fa fa-chevron-circle-right'></i>".$key->prenom_ben; ?>
               <span class="label label-success pull-right"><?php echo $key->qteM; ?></span></a></li>

                 <?php
                 }
                 ?>