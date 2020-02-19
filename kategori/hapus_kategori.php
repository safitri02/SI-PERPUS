<?php  
include 'koneksi.php';

$id= $_GET["id_kategori"];

$sql= mysqli_query($koneksi, "DELETE FROM tb_kategori WHERE id_kategori= '$id' ");

    if ($sql) {
      echo "
      <script>
      alert('Kategori Berhasil Dihapus');
	    document.location.href='index.php?menu=kategori';
      </script>
      ";
    } else{
      echo "
      <script>
      alert('Kategori Gagal Dihapus');
      document.location.href='index.php?menu=kategori';
      </script>
      ";
    }



?>