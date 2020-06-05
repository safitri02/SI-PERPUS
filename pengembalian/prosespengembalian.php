<?php 

include 'koneksi.php';

if (isset($_POST["simpan"])) {
	$nama= $_POST["nama"];
	$judul= $_POST["judul"];
	$tgl1= $_POST["tgl_pinjam"];
	$tgl2= $_POST["tgl_kembali"];
	$denda= $_POST["denda"];

	$tambah= mysqli_query($koneksi, "INSERT INTO tb_pengembalian VALUES('', '$nama', '$judul', '$tgl1', '$tgl2', '$denda') ");

	//Ganti statusnya
	$edit = mysqli_query($koneksi,"UPDATE tb_transaksi set status = 'Kembali' where id_transaksi= '$id_transaksi' ");

		echo "
			<script> 
			alert('Pengembalian Berhasil Dilakukan'); 
			document.location.href='index.php?menu=transaksi';
			</script>
		";
	} else{
		echo "
			<script> 
			alert('Pengembalian Gagal!'); 
			document.location.href='index.php?menu=tambah_transaksi';
			</script>
		";
	}

}

}


?>