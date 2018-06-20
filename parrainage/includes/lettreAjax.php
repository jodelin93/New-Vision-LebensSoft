<section id="timeline-wrapper">
        <div class="container-fluid">
          <div class="row">
           
            <div class="timeline-block">
              <div class="timeline-events">
                <br>
<?php 
	include ("../../class/Core.php");
	
// include 'Hotel.php';
	$core = new Core();
    $id = $_GET['idlettre'];
    // SELECT * FROM beneficiaire, lettre, parrain WHERE beneficiaire.idBene=lettre.expediteur AND 
    // parrain.idParrain=lettre.destinateur  AND lettre.id_par_ben='PAR-12/ORP-002' OR 
    // beneficiaire.idBene=lettre.destinateur AND  parrain.idParrain=lettre.expediteur AND lettre.id_par_ben='PAR-12/ORP-002'
    // $cod = "id_par_ben ='".$id."' order by date desc";
    $co = "beneficiaire.idBene=lettre.expediteur AND 
    parrain.idParrain=lettre.destinateur  AND lettre.id_par_ben='".$id."' OR 
    beneficiaire.idBene=lettre.destinateur AND  parrain.idParrain=lettre.expediteur
    AND lettre.id_par_ben='".$id."'";
    $conv = $core->selectData("lettre, beneficiaire, parrain", NULL, $co, NULL, NULL);
    foreach ($conv as $value) {
      $pd = $value->destinateur;
      if (substr($pd, 0, 3)=="PAR") {
        $class= "l-event";
      }elseif (substr($pd, 0, 3)!="PAR") {
        $class= "r-event";
      }

       $pe = $value->expediteur;
      if (substr($pe, 0, 3)=="PAR") {
        $class= "l-event";
        $nomC= $value->prenom_par." ".$value->nom_par;
        $photo = $value->photo_parrain;
      }elseif (substr($pe, 0, 3)!="PAR") {
        $class= "r-event";
        $nomC= $value->prenom_ben." ".$value->nom_ben;
        $photo = $value->photo;
      }
    
?>

                <div class="event <?php echo $class; ?> col-md-6 col-sm-6 col-xs-8 ">
                <article class='gallery'>
                <a class='gallery-link' href='lettres/<?= $value->lettre ?>'>
                <span class="thumb ion ion-ios-email-outline"></span>
                </a>
                </article>
                  <div class="event-body">
                    <div class="person-image pull-left image-circle"><img src="../../avatars/<?= $photo ?>" alt="Avatar"/></div>
                      <div class="event-content">
                        <h5 class="text-primary text-left"><?php echo $nomC; ?> </h5>
                          <span class="text-muted text-left" style="display:block; margin: 0"><small><?php echo $value->date; ?></small></span>
                      </div>
                  </div> <!-- end of event body -->
                  <div class="clear-fix"></div>
              </div><!-- end of left event -->
                <div class="row"></div>
               
                
             <?php

           }
           ?>
            </div>
          </div>
        </div>
      </div>

  </section>