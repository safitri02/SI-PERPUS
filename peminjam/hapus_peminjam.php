<?php  

$id= $_GET["id_peminjam"];

$sql= mysqli_query($koneksi, "DELETE FROM tb_peminjam WHERE id_peminjam= '$id' ");

    if ($sql) {
      echo "
      <script>
      alert('Data Peminjaman Berhasil Dihapus');
	    document.location.href='index.php?menu=peminjam';
      </script>
      ";
    } else{
      echo "
      <script>
      alert('Data Peminjaman Gagal Dihapus');
      document.location.href='index.php?menu=peminjam';
      </script>
      ";
    }


?>