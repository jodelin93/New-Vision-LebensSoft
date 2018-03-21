<?php
  session_start();
  
  include("class/Core.php");
  include("includes/constantes.php");
  $etat = "actif";
  $core = new Core();
  if (isset($_SESSION['nom_user'])) {

  header("location:main.php");
  }

  if (isset($_POST['conn']) and !empty($_POST['pwd'])){

      $fieldname = array('login', 'etat');
      $pwd = $_POST['pwd'];
      $username = $_POST['username'];
      $fieldvalue = array($username, $etat);
      $condition = "login = "."'".$username."'"." and etat = "."'actif'"." and utilisateur.idEmp= employer.idEmp";
     

      $res = $core->selectData('utilisateur, employer',NULL, $condition, NULL, NULL);

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
       
      }

       if(isset($pass) and $pass == $pwd){
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
        }else{

        ?>
        <script>
          alert("une erreur s'est produite pendant votre identification. Veuillez verifier votre mot de passe ou contacter l'administrateur");
       </script>
     <?php
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
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!-- style.css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--pace-->
  <link rel="stylesheet" href="plugins/pace/pace.min.css">
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
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script src="bower_components/PACE/pace.min.js"></script>
<!-- PACE -->
<script src="bower_components/PACE/pace.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
 

   // To make Pace works on Ajax calls
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: 'main.php', success: function (result) {
        
      }
    })
  })
</script>
</body>
</html>
