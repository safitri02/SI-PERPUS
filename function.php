<?php  

$koneksi= mysqli_connect("localhost", "root", "", "db_perpus");

function registrasi($data){
	global $koneksi;

	$nama= htmlspecialchars(stripcslashes($data["nama"]));
	$username= htmlspecialchars(stripcslashes($data["username"]));
	$password= htmlspecialchars(stripcslashes($data["password"]));
	$password2= htmlspecialchars(stripcslashes($data["password2"]));

	//selanjutnya kita cek apakah user sudah terdaftar atau belum
	$cek= mysqli_query($koneksi, "SELECT * FROM user WHERE username= '$username' ");

	//jika ada
	if (mysqli_fetch_assoc($cek)) {
	  	echo "
	  	<script> alert(Username sudah ada, Silahkan pakai yang lain!); </script>
	  	";
	  	return false;
	  }  

	  //selanjutnya kita cek kecocokan password
	  if ($password !== $password2) {
	  	echo "
	  		<script> alert('Password Anda Tidak Sesuai!') </script>
	  	";
	  	return false;
	  }

	  //selanjutnya kita hass dulu passwordhya
	  $password= password_hash($password, PASSWORD_DEFAULT);

	  //selanjutnya kita insert 
	  mysqli_query($koneksi, "INSERT INTO user VALUES ('','$nama', '$username', '$password' ) ");

}


?>