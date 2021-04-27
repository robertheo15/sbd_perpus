<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin - Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="<?= BASEURL; ?>/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="black">
      <div class="logo"><a href="<?= BASEURL; ?>/index" class="simple-text logo-normal">
          PinjamBuku-Aja
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="<?= BASEURL; ?>/admin/index">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= BASEURL; ?>/admin/dataBuku">
              <i class="material-icons">library_books</i>
              <p>Data Buku</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= BASEURL; ?>/admin/dataMember">
              <i class="material-icons">person</i>
              <p>Data Member</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= BASEURL; ?>/admin/dataPinjam">
              <i class="material-icons">bubble_chart</i>
              <p>Data Peminjaman</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= BASEURL; ?>/admin/laporan">
              <i class="material-icons">content_paste</i>
              <p>Laporan</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= BASEURL; ?>/auth/logout">
              <i class="material-icons">person</i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>