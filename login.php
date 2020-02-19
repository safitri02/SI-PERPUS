<?php  
include 'koneksi.php';

if (isset($_POST["login"])) {


$username= $_POST["username"];
$password= md5($_POST["password"]);

$login= mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password' ");
$cek= mysqli_num_rows($login);

if ($cek > 0) {
  session_start();
  $_SESSION['username']= $username;
  $_SESSION['status']= "login";

  header('location:index.php');
} else{
mysqli_error($koneksi);
}
}

?>


<html lang="en">
<head>

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
    <div class="card-header">SISTEM INFORMASI PERPUS - LOGIN</div>
    <div class="card-body">
      <form action="" method="post">
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan username" required="required" autofocus="autofocus" autocomplete="off">
            <label for="username">Username</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder=" Masukkan Password" required="required"  autocomplete="off">
            <label for="inputPassword">Password</label>
          </div>
        </div>
        
        <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
       <!--  <a class="btn btn-primary btn-block" href="index.php">Login</a> -->
      </form>
     <!--  <div class="text-center">
        <a class="d-block small mt-3" href="registrasi.php">Belom punya akun? Buat Akun!</a>
  
      </div> -->
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>




</body></html>