<?php
   session_start();
   $pass_error = NULL;
   $util_error = NULL;
   $etat_error = NULL;
   include("class/Core.php");
   include("includes/constantes.php");
   $etat = "actif";
   $core = new Core();
   $er = 0;
   if (isset($_SESSION['nom_user'])) {
 
   header("location:main.php");
   }
 
   if (isset($_POST['conn']) and !empty($_POST['pwd'])){
 
       $fieldname = array('login');
       $pwd = sha1($_POST['pwd']);
       $username = $_POST['username'];
       $fieldvalue = array($username);
       $condition = "login = "."'".$username."'"." and utilisateur.idEmp= employer.idEmp";
      
 
       $res = $core->selectData('utilisateur, employer',NULL, $condition, NULL, NULL);
 
       if (!$res) {
        
       $util_error = "Compte utilisateur inexistant!";
       $er++;
       }
 
 
       foreach ($res as $res_rek) {
        
           $pass = $res_rek->password ;
           $id = $res_rek->idEmp;
           $username = $res_rek->login;
           $fct = $res_rek->fonction;
           $nom = $res_rek->nom_emp;
           $pnom = $res_rek->prenom_emp;
           $departement = $res_rek->departement;
           $photo = $res_rek->photo;
           $droit = $res_rek->droit;
           $etat = $res_rek->etat;
        
       }
         if ($etat =="Desactiver") {
          $etat_error = "Compte utilisateur inactif!";
          $er++;
         }
 
 
        if(isset($pass) and $pass != $pwd){
            $pass_error = "Mauvais mot de passe";
             $er++;
           }
 
         if ($er == 0) {
           
         
           $_SESSION['connecte'] = time();
           $_SESSION['iduser'] = $id;
           $_SESSION['nom_user'] = $username;
           $_SESSION['nom_emp'] = $pnom." ".$nom;
           //$_SESSION['prenom_user'] = $pnom;
           $_SESSION['fonction'] = $fct;
           $_SESSION['dept'] = $departement;
           $_SESSION['photo']=$photo;
           $_SESSION['droit'] = $droit;
          
           echo'
              <script language="Javascript">
                  <!--
                        document.location.replace("main.php");
                  // -->
            </script>';
         }
   }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lebens-Soft  | Connexion</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_components/bootstrap/dist/css/bootstrap.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_components/font-awesome/css/font-awesome.css">
  <!-- ionicons -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_components/Ionicons/css/ionicons.css">
   <!-- theme style -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>css/master_style.css">
   <!-- Cross Admin skins -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>css/skins/_all-skins.css">
   <!-- morris chart -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_components/jvectormap/jquery-jvectormap.css">
  <!-- date picker -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
   <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
   <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
   <!-- Pace style -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_plugins/pace/pace.min.css">  
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker --> 
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_plugins/iCheck/all.css">
   <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_components/select2/dist/css/select2.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_plugins/iCheck/flat/blue.css">
    <!-- bootstrap slider -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_plugins/bootstrap-slider/slider.css">

  <link rel="stylesheet" href="<?php echo ROOT; ?>css/font.css">
 
  <link rel="stylesheet" href="<?php echo ROOT; ?>css/w3.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../css/master_style.css">

  <!-- Cross Admin skins -->
  <link rel="stylesheet" href="../css/skins/_all-skins.css">

  <link rel="icon" type="image/png" href="<?php echo ROOT; ?>images/lebens_icon.png"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="" id="bod" style="background:url('images/lebens_background.jpg') no-repeat center fixed;
  background-size: cover;">
  <br>
  <br>
  <br>
  <br>
  <br>
<div class="row">
<div class="col-lg-offset-8 col-lg-3">
  <div class="login-logo">
    
    <a href="index.php"><b>Lebens</b>-Soft</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body margin_left" style="background: rgba(255,255,255,0.5); ">
        <p class="login-box-msg">Connectez Vous</p>

        <form action="" method="post" class="ajax">

            <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="Nom d'utilisateur" name="username">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="Mot de Passe" name="pwd">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="">
              <div class="">
                <div class="checkbox icheck">
                  <label>
                    <input type="checkbox" class="form-control"> Se souvenir de moi
                  </label>
                </div>
              </div>
            </div>

            <div class="">
              <!-- /.col -->
              <div class="">
                <input type="submit" name="conn" class="btn btn-primary btn-block btn-flat form-control" value="Se Connecter">
                
              </div>
              <!-- /.col -->
            </div>
        </form>
        
        
        <!-- /.social-auth-links -->

        <a href="#">Mot de passe oubli&eacute;</a><br>
     <div class="ajax-content">
          </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</div>
<div class="modal modal-danger fade messagec" id="default">
  
  <div class="modal-dialog">

    <div class="modal-content" >

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> <h4><i class="icon fa fa-ban"></i> Alert!</h4></h4>
   
      </div>
      <div class="modal-body">

  <?php echo "-".$etat_error."<br/>"; ?>
 
     <?php echo "-".$util_error."<br/>"; ?>
    <?php echo "-".$pass_error."<br/>"; ?>
   
</div> </div> </div> </div>
<!-- jQuery 3 -->
<?php  
include("includes/scripts.php");
?>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
 

   // To make Pace works on Ajax calls
   $(function () {

<?php 
    if ($er != 0) {
?>

$('#default').modal('show');

<?php
     }
?>
$('input').iCheck({
  checkboxClass: 'icheckbox_square-blue',
  radioClass: 'iradio_square-blue',
  increaseArea: '20%' // optional
});
});
</script>
</body>
</html>
