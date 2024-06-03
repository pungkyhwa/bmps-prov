<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title;?> | <?php echo $subtitle;?></title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqvmap/jqvmap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.css'); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/summernote/summernote-bs4.min.css'); ?>">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/css/select2.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css');?>">


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a href="<?php echo base_url('login/logout') ?>" role="button">
          <i class="fas fa-sign-out-alt">  logout</i>
        </a>     
      </li>   
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('dasboard');?>" class="brand-link">
      <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BPMS Kab.Tang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg');?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['sesnama']?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo base_url('dasboard');?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Kemendigbud</li>
          <li class="nav-item">
            <a href="<?php echo base_url('kecamatan');?>" class="nav-link">
              <i class="nav-icon fas fa-city"></i>
              <p>Kecamatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Daftar Sekolah
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/bentuksekolah/1');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Sekolah TK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/bentuksekolah/2');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua SD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/bentuksekolah/3');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua SMP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/bentuksekolah/6');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua SMA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/bentuksekolah/8');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua SMk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/bentuksekolah/9');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua SLB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/bentuksekolah/4');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua SPK SD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/bentuksekolah/5');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua SPK SMP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/bentuksekolah/6');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua SPK SMA</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-header">Kemenag</li>
          <li class="nav-item">
            <a href="<?php echo base_url('kecamatan/kecamatankemenag');?>" class="nav-link">
              <i class="nav-icon fas fa-city"></i>
              <p>Kecamatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Daftar Sekolah
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/sekolahkemenag');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/bentuksekolahkemenag/10');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Sekolah MA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/bentuksekolahkemenag/11');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua MI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/bentuksekolahkemenag/12');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua MTS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/bentuksekolahkemenag/13');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua MTsS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sekolah/bentuksekolahkemenag/14');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua RA</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-header">Yayasan</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Daftar Yayasan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('yayasan/');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Semua Yayasan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('yayasan/kecamatan');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Yayasan / Kecamatan</p>
                </a>
              </li>
            </ul>
          </li>
          <?php 
            $seslevel = $_SESSION['seslevel'];
            if($seslevel == 'admin'){?>
                     
          <li class="nav-header">Pengguna</li>
          <li class="nav-item">
            <a href="<?php echo base_url('user');?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Daftar User</p>
            </a>
          </li>

          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
