<!DOCTYPE html>
<html>
<head>
<?php
$titre = "Control Panel";

require "class/Droit.php";

require "includes/header.php";

?>

    <!-- Main content -->
    <section class="content">


        <div class="row">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Tab 1</a></li>
              <li><a href="#tab_2" data-toggle="tab">Tab 2</a></li>
              <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="tab_1">
              	<div class="row">	
			        <div class="col-lg-3 col-xs-6">
			          <!-- small box -->
			          <div class="small-box bg-aqua">
			            <div class="inner">
			              <h3>150</h3>

			              <p>New Orders</p>
			            </div>
			            <div class="icon">
			              <i class="ion ion-bag"></i>
			            </div>
			            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			          </div>
			        </div>

			         <div class="col-lg-3 col-xs-6">
			          <!-- small box -->
			          <div class="small-box bg-aqua">
			            <div class="inner">
			              <h3>150</h3>

			              <p>New Orders</p>
			            </div>
			            <div class="icon">
			              <i class="ion ion-bag"></i>
			            </div>
			            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			          </div>
			        </div>

			         <div class="col-lg-3 col-xs-6">
			          <!-- small box -->
			          <div class="small-box bg-aqua">
			            <div class="inner">
			              <h3>150</h3>

			              <p>New Orders</p>
			            </div>
			            <div class="icon">
			              <i class="ion ion-bag"></i>
			            </div>
			            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			          </div>
			        </div>

			         <div class="col-lg-3 col-xs-6">
			          <!-- small box -->
			          <div class="small-box bg-aqua">
			            <div class="inner">
			              <h3>150</h3>

			              <p>New Orders</p>
			            </div>
			            <div class="icon">
			              <i class="ion ion-bag"></i>
			            </div>
			            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			          </div>
			        </div>

		    	</div>

		    	<div class="row">
				    <div class="col-lg-7">
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
		              <ul class="todo-list">
		                <li>
		                  <!-- drag handle -->
		                  <span class="handle">
		                        <i class="fa fa-ellipsis-v"></i>
		                        <i class="fa fa-ellipsis-v"></i>
		                      </span>
		                  <!-- checkbox -->
		                  <input type="checkbox" value="">
		                  <!-- todo text -->
		                  <span class="text">Design a nice theme</span>
		                  <!-- Emphasis label -->
		                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
		                  <!-- General tools such as edit or delete-->
		                  <div class="tools">
		                    <i class="fa fa-edit"></i>
		                    <i class="fa fa-trash-o"></i>
		                  </div>
		                </li>
		              </ul>
		            </div>
		            <!-- /.box-body -->
		            <div class="box-footer clearfix no-border">
		              <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Ajouter Ev&eacute;nement</button>
		            </div>
		          </div>
				    </div>

		    		<div class="col-lg-5">
		    <!-- Calendar -->
			          <div class="box box-solid bg-green-gradient">
			            <div class="box-header">
			              <i class="fa fa-calendar"></i>

			              <h3 class="box-title">Calendrier</h3>
			              <!-- tools box -->
			              <div class="pull-right box-tools">
			                <!-- button with a dropdown -->
			                
			                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
			                </button>
			                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
			                </button>
			              </div>
			              <!-- /. tools -->
			            </div>
			            <!-- /.box-header -->
			            <div class="box-body no-padding">
			              <!--The calendar -->
			              <div id="calendar" style="width: 100%"></div>
			            </div>
			            <!-- /.box-body -->
			           
			          </div>
          <!-- /.box -->
		 </div>
		</div>


		 <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ajouter un evenement</h4>
              </div>
              <div class="modal-body">
                <form method="post" action="">
                	<fieldset>
                		                		    <!-- Date -->
			              <div class="form-group">
			                <label>Date:</label>

			                <div class="input-group date">
			                  <div class="input-group-addon">
			                    <i class="fa fa-calendar"></i>
			                  </div>
			                  <input type="text" class="form-control pull-right" name="date_eve" id="datepicker">
			                </div>
			                <!-- /.input group -->
			              </div>
                		<br>
                		<input type="text" name="activite" class="form-control" placeholder="Evenement a venir!">
                		<br>
                		<textarea placeholder="Description" name="description" class="form-control"></textarea>
                	</fieldset>
             
              </div>
              <div class="modal-footer">
                <input type="reset" class="btn btn-default pull-left" data-dismiss="modal" value="Annuler">
                <input type="submit" class="btn btn-primary" value="Enregistrer" name="ajouter_eve">
              </div>
           </form>
       </div>
     

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
		    	<!-- row -->
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="tab_2">
                ......
              </div>
              <!-- /.tab-pane -->


              <div class="tab-pane" id="tab_3">
                ......
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </section>
    <!-- /.content -->
  </div>
 

 <?php
 include("includes/footer.php");
 include("includes/control_side_bar.php");
 include 'includes/script.php';
 include('includes/enregistrement.php');
 ?> 
</div>
<!-- ./wrapper -->

</body>
</html>
