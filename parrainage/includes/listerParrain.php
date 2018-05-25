<?php 
include_once("../class/Core.php");

            $ii=0;
            $core=new Core();
            $select= $core->selectData("parrain", NULL,  NULL, NULL, NULL);
                
                foreach ($select as $res_rek) {
                   $ii= $ii+1;
            ?>
             <tr>
              <td><?= $res_rek->prenom_par;?></td>
              <td><?=$res_rek->nom_par;?></td>
              <td><?=$res_rek->telephone;?></td>
              <td><?=$res_rek->email;?></td>
              <td><?=$res_rek->profession;?></td>
              <td><?=$res_rek->nationalite;?></td>
              <td>
                <i class="fa fa-plus"></i><i class="fa fa-trash"></i> Bene
                <span class="badge bg-purple">
                  <?php $qte = $core->qteLigne('beneficiaire','count(*) qte', NULL, NULL, NULL); echo $qte; ?>
                    
                </span>
              </td>


             </tr>
        <?php } ?>
