<?php  
include 'koneksi.php';

$id= $_GET["id_siswa"];

$sql= mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE id_siswa= '$id' ");

if ($sql) {
      echo "
      <script>
      alert('Data Siswa Berhasil Dihapus');
	  document.location.href='index.php?menu=siswa';
      </script>
      ";
    } else{
      echo "
      <script>
      alert('Data Siswa Gagal Dihapus');
      document.location.href='index.php?menu=siswa';
      </script>
      ";
    }



?>