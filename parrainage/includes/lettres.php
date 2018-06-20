    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">
          <a onclick="ajouterLettreModal()" class="btn btn-success btn-block btn-shadow margin-bottom">Ajouter Lettre</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Conversations</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding mailbox-nav">
              <ul class="nav nav-pills nav-stacked" id="listeConversationAjax">
                <?php
               
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
                
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
      
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
               
                 
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding" id="lettreSection">
         
              
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">

            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
