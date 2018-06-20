 <?php
$core = new Core();
$att = "count(*)";
$util = $core->selectData('utilisateur', NULL, NULL, NULL, NULL); 
//$reserv = $hotel->selectData('reservation', $att, NULL, NULL, NULL);

 ?>

 <!-- Info boxes -->
   

      <div class="row">

      <div class="col-md-4">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Les Utilisateurs</h3>

                  <div class="box-tools pull-right">
                 
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <ul class="users-list">
                    <?php
                    foreach ($util as $res_util) {
                     
                    ?>
                    <li>
                      <img src="../avatars/<?= $res_util->photo ?>" alt="User Image">
                      <a class="users-list-name" href="#"><?= $res_util->idEmp ?></a>
                      <span class="users-list-date"><?= $res_util->droit ?></span>
                    </li>
                    <?php
                      }
                      ?>
                    
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>

             <div class="col-md-3">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">En ligne</h3>

                  <div class="box-tools ">
                 
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="w3-card" id="userOnline">
                  
                 
                     

                     
                 
                  
                    
                  
                  <!-- /.users-list -->

                </div>

 

                <!-- /.box-body -->
                                <!-- /.box-footer -->
              </div>


              <!--/.box -->
            </div>

                   <div class="col-md-5">
             
            <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>

                  <h3 class="box-title">Ev&eacute;nements</h3>

                  <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                  <ul class="todo-list" id="eventlist">
               
                  </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                  <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#modal-default-ajou"><i class="fa fa-plus"></i> Ajouter Ev&eacute;nement</button>
                </div>
              </div>
           
        </div>
          </div>






















    