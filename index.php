<?php  

include 'koneksi.php';
session_start();


if (!$_SESSION['status']) {
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SISTEM INFORMASI PERPUSTAKAAN</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">SI PERPUS</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php?menu=home">
          <i class="fas fa-fw fa-tachometer-alt"> </i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?menu=siswa">
          <i class="fas fa-users"> </i>
          <span>Data Siswa</span></a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="index.php?menu=kategori">
          <i class="fas fa fa-id-badge"> </i>
          <span>Kategori</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?menu=buku">
          <i class="fas fa-book"> </i>
          <span>Data Buku</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?menu=transaksi">
          <i class="fas fa-arrow-left"> </i>
          <span>Peminjaman</span></a>

      <li class="nav-item">
        <a class="nav-link" href="index.php?menu=pengembalian">
          <i class="fas fa-arrow-left"> </i>
          <span>Pengembalian</span></a>

      <li class="nav-item">
        <a class="nav-link" href="keluar.php">
         <!--  <i class="fas fa fa-sign-out"> </i> -->
          <i class="fas fa-power-off"> </i>
          <span>Keluar</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Aplikasi Perpustakaan</a>
          </li>
        </ol>

        <!-- Page Content -->
        <?php
    if (isset($_GET["menu"])) {
      $menu = $_GET["menu"];

            switch ($menu) {
              case 'siswa':
               include 'siswa/index.php';
                break;

              case 'home':
              include 'home.php';
              break;

              case 'tambah_siswa':
              include 'siswa/tambah_siswa.php';
              break;

              case 'edit_siswa':
              include 'siswa/edit_siswa.php';
              break;

              case 'hapus_siswa':
              include 'siswa/hapus_siswa.php';
              break;

              case 'kategori':
              include 'kategori/index.php';
              break;

              case 'hapus_kategori':
              include 'kategori/hapus_kategori.php';
              break;

              case 'edit_kategori':
              include 'kategori/edit_kategori.php';
              break;

              case 'buku':
              include 'buku/index.php';
              break;

              case 'tambah_buku':
              include 'buku/tambah_buku.php';
              break;

              case 'edit_buku':
              include 'buku/edit_buku.php';
              break;

              case 'hapus_buku':
              include 'buku/hapus_buku.php';
              break;

              case 'transaksi':
              include 'transaksi/transaksi.php';
              break;

              case 'tambah_transaksi':
              include 'transaksi/tambah_transaksi.php';
              break;

              // case 'peminjam':
              // include 'peminjam/index.php';
              // break;

              // case 'tambah_peminjam':
              // include 'peminjam/tambah_peminjam.php';
              // break;

              // case 'edit_peminjaman':
              // include 'peminjam/edit_peminjaman.php';
              // break;

              // case 'hapus_peminjaman':
              // include 'peminjam/hapus_peminjam.php';
              // break;

              case 'pengembalian':
              include 'pengembalian/index.php';
              break;

              case 'tambah_pengembalian':
              include 'pengembalian/tambah_pengembalian.php';
              break;

              case 'prosespengembalian':
              include 'pengembalian/prosespengembalian.php';
              break;


              //   case 'hapus_pengembalian':
              // include 'pengembalian/hapus_pengembalian.php';
              // break;

              //   case 'editpengembalian':
              // include 'pengembalian/edit_pengembalian.php';
              // break;

              case 'keluar':
              include 'keluar.php';
              break;

              }
            }
        ?>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto ">
            <span>Copyright © Safitri | 2020</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
