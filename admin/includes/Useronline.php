  
<?php
include("../../class/Core.php");
session_start();

     $core = new Core();
$act="Actif";

$log=$_SESSION['nom_user'];

 $condition = "etat = "."'".$act."'"." and login<>"."'".$log."'"."";

$util = $core->selectData('utilisateur', NULL, $condition, NULL, NULL); 
                    foreach ($util as $res_util) {
                     
                    ?>
<div class="user-panel">
   <div class="pull-left image">
                        <img src="../avatars/<?= $res_util->photo ?>" class="img-circle" width="20%" alt="User Image">
                      </div>
                      <div class="pull-left info">

                        <p style="color: #000;"><?= $res_util->login ?></p>
                        <!-- Status -->
                        <a href="" style="color: #000;"><i class="fa fa-circle text-success"></i> Online</a>
                    
                      </div>
                        </div>
      <?php
                   }
                      ?>