<?php  
include 'koneksi.php';

if (isset($_POST["simpan"])) {
	
	$nama= $_POST["nama"];
	$buku= $_POST["judul_buku"];
	$pinjam= $_POST["tgl_pinjam"];
	$kembali= $_POST["tgl_kembali"];
	$status = $_POST["status"];

	$tambah= mysqli_query($koneksi, "INSERT into tb_transaksi VALUES('', '$nama', '$buku', '$pinjam', '$kembali', '$status') ");

if ($tambah) {
		echo "
			<script> 
			alert('Data Transaksi Berhasil Ditambah'); 
			document.location.href='index.php?menu=transaksi';
			</script>
		";
	} else{
		echo "
			<script> 
			alert('Data Transaksi Gagal Ditambah'); 
			document.location.href='index.php?menu=tambah_transaksi';
			</script>
		";
	}

}

?>

<div class="container-fluid">
<!-- Page Heading -->
<div class="clearfix">
<h1 class="h3 mb-4 text-gray-800 float-left">Tambah Data Transaksi</h1>
<a href="index.php?menu=transaksi" class="btn btn-secondary btn-sm float-right"><i class="fas fa-reply"></i> Kembali</a>
</div>
<hr>
<div class="row">
<div class="col-md-12">
<div class="card">
	<div class="card-header">
		<span class="text-primary"><strong>Silahkan isi data di bawah ini!</strong></span>
	</div>
	<div class="card-body">
		<form action="" method="POST">
			<div class="form-group">
				<label for="nama">Nama Siswa </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="#"></i></div>
					</div>
					<?php $a= mysqli_query($koneksi, "SELECT * FROM tb_siswa"); ?>
						<select class="form-control" name="nama"> 
							<?php while ($d= mysqli_fetch_assoc($a)) : ?>
							<option value="<?= $d["id_siswa"]; ?> selected"> <?= $d["nama"]; ?> </option>
						<?php endwhile; ?>
						</select>
				</div>
			</div>
			<div class="form-group">
				<label for="buku">Judul Buku </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="#"></i></div>
					</div>
							<?php $a= mysqli_query($koneksi, "SELECT * FROM tb_buku"); ?>
						<select class="form-control" name="judul_buku"> 
							<?php while ($d= mysqli_fetch_assoc($a)) : ?>
							<option value="<?= $d["id_buku"]; ?> selected"> <?= $d["judul_buku"]; ?> </option>
						<?php endwhile; ?>
						</select>
				</div>
			</div>
			<div class="form-group">
				<label for="tgl_pinjam">Tanggal Pinjam </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="#"></i></div>
					</div>
					<input type="date" id="tgl_pinjam" class="form-control" name="tgl_pinjam" autocomplete="off" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="tgl_kembali">Tanggal Kembali </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="#"></i></div>
					</div>
					<input type="date" id="tgl_kembali" class="form-control" name="tgl_kembali" autocomplete="off" required="required">
				</div>
			</div>

			<div class="form-group">
				<label for="status"> Status </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="#"></i></div>
					</div>
					<input type="text" id="status" class="form-control" value="Pinjam" name="status" autocomplete="off" required="required" readonly="">
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-sm float-right" name="simpan"><i class="fas fa-save"></i> Tambah Data</button>
			</div>
		</form>
	</div>
</div>
</div>
</div>
</div>