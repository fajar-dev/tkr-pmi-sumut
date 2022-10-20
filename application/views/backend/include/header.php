<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>TKR-SUMUT &mdash; <?= $title ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class=" mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?= base_url('assets/') ?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"> <?= $user['name'] ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="#"  data-toggle="modal" data-target="#setting" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Setting
              </a>
              <a href="<?= base_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <img src="<?= base_url('assets/') ?>assets/image/pmi.png" class="img-fluid mt-4" width="150" alt="">
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <img src="<?= base_url('assets/') ?>assets/image/pmi.png" class="img-fluid" width="50" alt="">
          </div>
          <ul class="sidebar-menu pt-5">
              <li class="menu-header">Dashboard</li>
              <li class="active"><a class="nav-link" href="<?= base_url('user/dashboard') ?>"><i class="fas fa-house-damage"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">Kegiatan</li>
              <li><a class="nav-link" href="<?= base_url('user/peserta') ?>"><i class="fas fa-users"></i> <span>Peserta</span></a></li>
              <?php if($user['id'] == 12 ) { ?>
                <li class="menu-header">Admin</li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="fas fa-newspaper"></i><span>Berita</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="index-0.html">Tambah Berita</a></li>
                    <li><a class="nav-link" href="index.html">Data Berita</a></li>
                  </ul>
                </li>
                <li><a class="nav-link" href="blank.html"><i class="far fa-file"></i> <span>Document</span></a></li>
                <li><a class="nav-link" href="blank.html"><i class="far fa-user"></i> <span>User</span></a></li>
              <?php } ?>

              <li><a class="nav-link" href="<?= base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="<?= base_url() ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-home"></i> Home
              </a>
            </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content" style="min-height: 809px;">
        <section class="section">
          <div class="section-header">
            <h1><?= $title ?></h1>
          </div>
          <?php echo $this->session->flashdata('msg') ?>