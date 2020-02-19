<?php 
include 'koneksi.php';

$data= mysqli_query($koneksi, "SELECT * FROM tb_siswa");
$buku= mysqli_query($koneksi, "SELECT * FROM tb_buku");


if (isset($_POST["simpan"])) {
	$nama= htmlspecialchars($_POST["nama_siswa"]);
	$judul= htmlspecialchars($_POST["judul_buku"]);
	$tgl1= htmlspecialchars($_POST["tgl_pinjam"]);
	$tgl2= htmlspecialchars($_POST["tgl_kembali"]);
	$denda= htmlspecialchars($_POST["denda"]);


	// $cari_hari= abs(strtotime($tgl1)) - strtotime($tgl2);
	// $hitung_hari= floor($cari_hari/(60*60*24));

	// if ($hitung_hari > 7 ) {
	// 	$telat= $hitung_hari - 7;
	// 	$denda= 5000 * $telat;
	// } else{
	// 	$telat= 0;
	// 	$denda= 0;
	// }



	$sql= mysqli_query($koneksi, "INSERT INTO tb_pengembali VALUES
	('', '$nama', '$judul', '$tgl1', '$tgl2') ");
	
	mysqli_query($koneksi, $sql);

if ($sql) {
	echo "
		<script> 
		alert('Data Peminjam Berhasil Ditambah'); 
		document.location.href='index.php?menu=peminjam';
		</script>
	";
} else{
	echo "
		<script> 
		alert('Data Peminjam Gagal Ditambah'); 
		document.location.href='index.php?menu=tambah_peminjam';
		</script>
	";
}
}

?>

<div class="container-fluid">
<!-- Page Heading -->
<div class="clearfix">
<h1 class="h3 mb-4 text-gray-800 float-left">Tambah Peminjaman</h1>
<a href="index.php?menu=peminjam" class="btn btn-secondary btn-sm float-right"><i class="fas fa-reply"></i> Kembali</a>
</div>
<hr>
<div class="row">
<div class="col-md-8">
<div class="card">
	<div class="card-header">
		<span class="text-primary"><strong>Silahkan isi data di bawah ini!</strong></span>
	</div>
	<div class="card-body">
	<form action="" method="POST">

	<div class="form-group">
				<label for="judul_buku">Nama Peminjam </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<select class="custom-select form-control" name="nama_siswa">
						<?php while ($a= mysqli_fetch_assoc($data)) : ?>
           			<option> <?= $a["nama"]; ?> </option>
           		<?php endwhile; ?>
			 	</select> 
				</div>
			</div>
			<div class="form-group">
				<label for="judul_buku">Judul Buku </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<select class="custom-select form-control" name="judul_buku">
           			<option>  </option>
			 	</select> 
				</div>
			</div>
			<div class="form-group">
				<label for="tgl_pinjam">Tanggal Pinjam </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="date" id="tgl_pinjam" class="form-control" name="tgl_pinjam" autocomplete="off" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="tgl_kembali">Tanggal Kembali </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="date" id="tgl_kembali" class="form-control"  name="tgl_kembali" autocomplete="off" required="required">
				</div>
			</div>

		<!-- 	<div class="form-group">
				<label for="denda">Denda </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="denda" class="form-control" name="denda" autocomplete="off" required="required">
				</div>
			</div> -->
	
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-sm float-right" name="simpan"><i class="fas fa-save"></i> Simpan</button>
			</div>
		</form>
	</div>
</div>
</div>
</div>
</div>