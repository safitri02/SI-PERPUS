<?php 
include 'koneksi.php';

$id= $_GET["id_peminjam"];
$data= mysqli_query($koneksi, "SELECT * FROM tb_peminjam WHERE id_peminjam=$id");
$a= mysqli_fetch_assoc($data);

if (isset($_POST["simpan"])) {
	$nama= htmlspecialchars($_POST["nama_siswa"]);
	$judul= htmlspecialchars($_POST["judul_buku"]);
	$tgl1= htmlspecialchars($_POST["tgl_pinjam"]);
	$tgl2= htmlspecialchars($_POST["tgl_kembali"]);

	$sql= mysqli_query($koneksi, "UPDATE tb_peminjam SET nama_siswa='$nama', judul_buku='$judul', tgl_pinjam='$tgl1', tgl_kembali='$tgl2' WHERE id_peminjam= $id ");
	
	mysqli_query($koneksi, $sql);

if ($sql) {
	echo "
		<script> 
		alert('Data Peminjam Berhasil Diedit'); 
		document.location.href='index.php?menu=peminjam';
		</script>
	";
} else{
	echo "
		<script> 
		alert('Data Peminjam Gagal Diedit'); 
		document.location.href='index.php?menu=edit_peminjaman';
		</script>
	";
}
}

?>

<div class="container-fluid">
<!-- Page Heading -->
<div class="clearfix">
<h1 class="h3 mb-4 text-gray-800 float-left">Edit Peminjaman</h1>
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
		<label for="nama_siswa">Nama Peminjam</label>
		<input type="text" id="nama_siswa" class="form-control" name="nama_siswa" autocomplete="off" required="required" value="<?= $a["nama_siswa"]; ?> " readonly>
	</div>

		<div class="form-group">
		<label for="judul_buku">Judul Buku</label>
		<input type="text" id="judul_buku" class="form-control"  name="judul_buku" autocomplete="off" required="required" value="<?= $a["judul_buku"]; ?>">
	</div>

		<div class="form-group">
				<label for="tgl_pinjam">Tanggal Pinjam </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="date" id="tgl_pinjam" class="form-control"  name="tgl_pinjam" autocomplete="off" required="required" value="<?= $a["tgl_pinjam"]; ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="tgl_kembali">Tanggal Kembali </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="date" id="tgl_kembali" class="form-control"  name="tgl_kembali" autocomplete="off" required="required" value="<?= $a["tgl_kembali"]; ?>" readonly>
				</div>
			</div>
	
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-sm float-right" name="simpan"><i class="fas fa-save"></i> Simpan</button>
			</div>
		</form>
	</div>
</div>
</div>
</div>
</div>