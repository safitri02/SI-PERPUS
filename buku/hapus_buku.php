<?php  
include 'koneksi.php';

$d= $_GET["kode_buku"];

$sql= mysqli_query($koneksi, "DELETE FROM tb_buku WHERE kode_buku= '$d' ");

if ($sql) {
      echo "
      <script>
      alert('Data Buku Berhasil Dihapus');
	  document.location.href='index.php?menu=buku';
      </script>
      ";
    } else{
      echo "
      <script>
      alert('Data Buku Gagal Dihapus');
      document.location.href='index.php?menu=buku';
      </script>
      ";
    }



?>