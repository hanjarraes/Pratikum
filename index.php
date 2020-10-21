<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Mahasiswa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Costum Scss -->
  <link rel="stylesheet" href="scss/_custom.scss">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?page=Dashboard" title="Dashboard" class="nav-link">
          Home
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?page=Contacts" title="Contacts" class="nav-link">
          Contact
        </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Data Mahasiswa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li <?php if( $_GET['page']==="Dashboard" || 
                        $_GET['page']==="Contacts"  || 
                        $_GET['page']==="Profiles") { ?> class="nav-item menu-open"<?php }
                    else {?> class="nav-item"<?php } ?>>
            <a href="#" <?php if( $_GET['page']==="Dashboard" || 
                                  $_GET['page']==="Contacts"  || 
                                  $_GET['page']==="Profiles") { ?> class="active nav-link"<?php }
                              else {?> class="nav-link"<?php } ?>>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=Dashboard" title="Dashboard" 
                <?php if($_GET['page']==="Dashboard") { ?> class="active nav-link"<?php }else {?> class="nav-link"<?php } ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=Contacts" title="Contacts"
                  <?php if($_GET['page']==="Contacts") { ?> class="active nav-link"<?php }else {?> class="nav-link"<?php } ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="?page=Profiles" title="Profiles"
                <?php if($_GET['page']==="Profiles") { ?> class="active nav-link"<?php }else {?> class="nav-link"<?php } ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms Inputs Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=advanced" title="advanced"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mata Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>IP Mata Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dosen Mata Kuliah</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li <?php if( $_GET['page']==="DataMahasiswa" || 
                                  $_GET['page']==="DataDosen" || 
                                  $_GET['page']==="DataIpMatkul" || 
                                  $_GET['page']==="DataMatkul") { ?> class="nav-item menu-open"<?php }
                              else {?> class="nav-item"<?php } ?>>
            <a href="#" <?php if( $_GET['page']==="DataMahasiswa" || 
                                  $_GET['page']==="DataDosen" || 
                                  $_GET['page']==="DataIpMatkul" || 
                                  $_GET['page']==="DataMatkul") { ?> class="active nav-link"<?php }
                              else {?> class="nav-link"<?php } ?>>
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="?page=DataMahasiswa" title="DataMahasiswa"
              <?php if($_GET['page']==="DataMahasiswa") { ?> class="active nav-link"<?php }else {?> class="nav-link"<?php } ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tables Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="?page=DataDosen" title="DataDosen"
              <?php if($_GET['page']==="DataDosen") { ?> class="active nav-link"<?php }else {?> class="nav-link"<?php } ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tables Mata Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="?page=DataIpMatkul" title="DataIpMatkul"
              <?php if($_GET['page']==="DataIpMatkul") { ?> class="active nav-link"<?php }else {?> class="nav-link"<?php } ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tables IP Mata Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="?page=DataMatkul" title="DataMatkul"
                <?php if($_GET['page']==="DataMatkul") { ?> class="active nav-link"<?php }else {?> class="nav-link"<?php } ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tables Dosen Mata Kuliah</p>
                </a>
              </li>
            </ul>
          </li>   
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
            </ul>
          </li>    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
      
        <!-- KONTEN TAROK SINI -->
        <?php
			$page = (isset($_GET['page']))? $_GET['page'] : "main";
			switch ($page) {
        // Routers Dashbourd
        case 'Dashboard';  include "pages/Dashboard/Dashboard.php"; break;
        case 'Contacts' ; include "pages/Dashboard/Contacts.php"; break;
        case 'Profiles' ; include "pages/Dashboard/Profiles.php"; break;
        //and Routers Dashbourd
        case 'advanced' ; include "pages/forms/advanced.php"; break;
        // Tables
        case 'DataMahasiswa' ; include "pages/tables/dataMahasiswa/dataMahasiswa.php"; break;
        case 'DataDosen' ; include "pages/tables/dataDosen/dataDosen.php"; break;
        case 'DataIpMatkul' ; include "pages/tables/DataIpMatkul/DataIpMatkul.php"; break;
        case 'DataMatkul' ; include "pages/tables/DataMatkul/DataMatkul.php"; break;
        // and Tables
				default ; include 'pages/Dashboard/Dashboard.php';	
			}
      ?>
      <?php
        $current_page = 'home'; include 'pages/Dashboard/Dashboard.php';
      ?>



      <div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="https://adminlte.io">Muhammad Hanjarraes</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-pre
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
