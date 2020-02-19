<?php  
require 'function.php';


if (isset($_POST["registrasi"])) {
  if (registrasi($_POST) > 0 ) {
   echo "
    <script> 
    alert('Registrasi akun Berhasil!');
    document.location.href='login.php';
     </script>
   ";
  } else{
    mysqli_error($koneksi);
  }
}




?>


<html lang="en"><head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Halaman Registrasi</div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda" required="required" autofocus="autofocus">
              <label for="nama">Nama Lengkap</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" required="required">
              <label for="username">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="password" class="form-control" placeholder=" Nama Password" required="required">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password2" id="password2" class="form-control" placeholder="Konfirmasi Password Anda" required="required">
              <label for="password2"> Konfirmasi Password</label>
            </div>
          </div>
          
          <button type="submit" name="registrasi" class="btn btn-primary btn-block">Registrasi</button>
         <!--  <a class="btn btn-primary btn-block" href="index.php">Login</a> -->
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">sudah punya akun? login sekarang!</a>
    
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>




</body></html>