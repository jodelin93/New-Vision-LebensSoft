      <?php 
        
           include("../class/Core.php");
            $i=0;
              
                    $core = new Core();
                    
                        $table="event";
                     
                     $dates=date('Y-m-d');
                     $dates=substr($dates, 8);
                    // echo "$date";


                  //  $condition = "login = "."'".$username."'"." and utilisateur.idEmp= employer.idEmp";

                    $select= $core->selectData($table, NULL, NULL, NULL, NULL);
                
                foreach ($select as $res_rek) {
                    $id = $res_rek->id;
                    $date = $res_rek->date_event;
                    $titre = $res_rek->titre;
                     $desc = $res_rek->description;
                      $datess=substr($date, 8);
                   
                    $i=$i+1;
                    if($datess >= $dates){


                   
                    ?>
                   <li>
                      <!-- drag handle -->
                      <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                      <!-- checkbox -->
                      <input type="checkbox" value="">
                      <!-- todo text -->
                      <span class="text"><?php echo shortenText($desc,40);?></span>
                      <!-- Emphasis label -->
                      <small class="label label-danger"><i class="fa fa-clock-o"></i> <?= $date?></small>
                      <!-- General tools such as edit or delete-->
                      <div class="tools">
                        <i class="fa fa-eye" id="01<?=$id?>"></i>
                      
                      </div>
                    </li>   

                      <script type="text/javascript">
            $(document).ready(function (e) {

          $('#<?= '01'.$res_rek->id;?>').click(function(){
            

              $('#dav').html(" <?= $res_rek->date_event?>");
              $('#text').html(" <?= $res_rek->description?>");
               $('#user').html("creer par :  <?= $res_rek->user?>");
               $('#dac').html("le :  <?= $res_rek->date_create?>");
                
                $('#modal-default-mess').modal('show');  
      
                
             });



            });
           </script>
        
    <?php }

}
            function shortenText($text, $size) {
            if (strlen($text) > $size)
            return substr($text, 0, $size).' ...';
          return $text;
        }
    
            ?>
					              	