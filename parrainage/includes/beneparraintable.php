     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ses Fieulles</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="ele" class="table table-bordered table-hover display nowrap margin-top-10">
                <thead>
                  <tr>
                    <th>Nom Complet</th>
                    <th>Sexe</th>
                    <th>Statut</th>
                    <th>Date de Parrainage</th>
                    <th>Option</th>
                   
                  </tr>
                </thead>
                  <tbody id="">
                    <?php
                        foreach ($select as $res_rek) {
                   
                      ?>
                     <tr>
                      <td><?php echo $res_rek->prenom_ben." ".$res_rek->nom_ben;?></td>
                      <td><?=$res_rek->sexe;?></td>
                      <td><?=$res_rek->typeBene;?></td>
                      <td><?=$res_rek->dateParrainage;?></td>
                     
                        <td class="col-xs-10">

                                           <div class="col-xs-2" style="color: blue; ">
                                             <?php
                                                if ($_SESSION['droit']=="Administrateur") {
                                              ?>
                                              <a onclick="retirerBenePar('<?php echo $res_rek->idBene;?>')" class="">
                                                
                                                  <i class="<?php if($res_rek->statut ==1){echo 'fa fa-check-square-o';}else{echo 'fa fa-square'; } ?>"></i>
                                              </a>
                                               <?php
                                                   }
                                                ?>
                                            </div>


                                            <div class="col-xs-2" style="color: red; ">
                                            
                                            </div>

                                          

                                            <div class="col-xs-2" style="color: green; ">
                                             
                                               </div>


                                       

                                                                                 
                     </td>

                     </tr>
                  <?php
                   } ?>
                  </tbody>
        
             
              </table>

              
            </div>
            <!-- /.box-body -->
          </div>