<?php
  session_start();
  include("constantes.php");
  if (!isset($_SESSION['nom_user'])) {

  header("location:".ROOT."index.php");
  }
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="">
  <title>Lebens-Soft | <?php echo $titre;?></title>
  

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
 
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
    <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>css/bootstrap-datetimepicker.min.css">
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:300,600'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css'>
 
  <link rel="stylesheet" href="<?php echo ROOT; ?>css/w3.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>css/style.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>css/styl.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>css/normalise.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>css/popup.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/master_style.css">
  <link rel="icon" type="image/png" href="<?php echo ROOT; ?>images/lebens_icon.png"/>
  <!-- Cross Admin skins -->
  <link rel="stylesheet" href="../css/skins/_all-skins.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }
.logo-small {
      color: #00A5F9;
      font-size: 50px;
  }
    .example-modal .modal {
      background: transparent !important;
    }
  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Lebens</b>-Soft</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo ROOT;?>avatars/<?php echo $_SESSION['photo'];?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                               
                
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 1 notification</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                 
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo ROOT; echo'avatars/'.$_SESSION['photo']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nom_emp']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo ROOT; echo'avatars/'.$_SESSION['photo']; ?>" class="img-circle" style="width: 40%" alt="User Image">

                <p>
                  <?php echo $_SESSION['nom_emp']; ?>
                  <small><?php echo $_SESSION['fonction']; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                   <div class="pull-left">
                     <a href="#" class="btn btn-default btn-defaultlat">Profile</a>
                  </div>
                  </div>
                  <div class="col-xs-6 text-center">
                     <div class="pull-right">
                       <a href="<?php echo ROOT; ?>deconnexion.php" class="btn btn-default btn-flat">Se deconnecter</a>
                  </div>
                  </div>
                  
                </div>
                <!-- /.row -->
              </li>
             
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image">
          <img src="<?php echo ROOT; echo'avatars/'.$_SESSION['photo']; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <p><?php echo $_SESSION['nom_user']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">.</li>
        <li class="<?php if($titre == "Control Panel"){ echo "active";} ?>"><a href="<?php echo ROOT?>main.php"><i class="fa fa-dashboard"></i> <span>Control Panel</span></a></li>
        
            
        <li class="<?php if($titre == "Calendrier"){ echo "active";} ?>">
          <a href="<?php echo ROOT; ?>calendrier.php">
            <i class="fa fa-calendar"></i> <span>Calendrier</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-warning">3</small>
            </span>
          </a>
        </li>

        <?php
          if ($_SESSION['fonction']=="Directeur General" || $_SESSION['droit']=="Administrateur") {
     
        ?>
        <li class="<?php if($titre == "Habitat"){ echo "active";} ?>"><a href="<?php echo ROOT; ?>"><i class="fa fa-home"></i> <span>Habitat</span></a></li>
        <li class="<?php if($titre == "Micro Credit"){ echo "active";} ?>"><a href="<?php echo ROOT; ?>"><i class="fa fa-money"></i> <span>Micro Cr&eacute;dit</span></a></li>
        <li class="<?php if($titre == "Orphelinat"){ echo "active";} ?>"><a href="<?php echo ROOT; ?>orphelinat/"><i class="fa fa-child"></i> <span>Orphelinat</span></a></li>
        <li class="<?php if($titre == "Parrainage"){ echo "active";} ?>"><a href="<?php echo ROOT; ?>parrainage/"><i class="fa fa-group"></i> <span>Parrainage</span></a></li>
        <li class="<?php if($titre == "Ressources Humaines"){ echo "active";} ?>"><a href="<?php echo ROOT; ?>ressourceshumaines/"><i class="fa fa-address-book-o"></i> <span>Ressources Humaines</span></a></li>
        <li class="<?php if($titre == "Administration"){ echo "active";} ?>"><a href="<?php echo ROOT; ?>admin/administration.php"><i class="fa fa-gears"></i> <span>Administration</span></a></li>
            
     
        
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      </ul>

      <?php
    }else{
      $ico = new Droit();
      $icon = $ico->icon($_SESSION['dept']);

    ?>
      <li class="<?php if($titre == "Habitat"){ echo "active";} ?>"><a href="<?php echo ROOT.$_SESSION['dept']; ?>"><i class="fa <?php echo $icon; ?>"></i> <span><?php echo $_SESSION['dept']; ?></span></a></li>

    <?php
    }
  ?>
    </section>
    <!-- /.sidebar -->
  </aside>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <small><?php echo $titre; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active"><?php echo $titre; ?></li>
      </ol>
    </section>
