<?php  

include 'koneksi.php';

if (isset($_POST["simpan"])) {
	$kode= $_POST["kode"];
	$judul= $_POST["judul_buku"];
	$deskripsi= $_POST["deskripsi"];
	$kategori= $_POST["id_kategori"];

	$sql = mysqli_query($koneksi, "INSERT INTO tb_buku VALUES ('', '$kode', '$judul', '$deskripsi', '$kategori' )" );

	if ($sql) {
		echo "
			<script> 
			alert('Data Buku Berhasil Ditambah'); 
			document.location.href='index.php?menu=buku';
			</script>
		";
	} else{
		echo "
			<script> 
			alert('Data Buku Gagal Ditambah'); 
			document.location.href='index.php?menu=tambah_buku';
			</script>
		";
	}

}

?>


<div class="container-fluid">
<!-- Page Heading -->
<div class="clearfix">
<h1 class="h3 mb-4 text-gray-800 float-left">Tambah Data Buku</h1>
<a href="index.php?menu=buku" class="btn btn-secondary btn-sm float-right"><i class="fas fa-reply"></i> Kembali</a>
</div>
<hr>
<div class="row">
<div class="col-md-8">
<div class="card">
	<div class="card-header">
		<span class="text-primary"><strong>Silahkan isi data di bawah ini!</strong></span>
	</div>

	<?php 
	$query= "SELECT max(kode_buku) as maxKode FROM tb_buku";
	$hasil= mysqli_query($koneksi, $query);
	$data= mysqli_fetch_array($hasil);
	$kode_buku= $data['maxKode'];
	$nourut= (int) substr($kode_buku, 4,4);
	$nourut++;
	$char= "KB";
	$kode= $char.sprintf("%03s", $nourut);
	?>

	<div class="card-body">
		<form action="" method="POST">
			<div class="form-group">
				<label for="kode_buku">Kode Buku </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
						<input type="text" id="kode_buku" class="form-control" readonly="" 
						placeholder="<?php echo "$kode" ?>" name="kode" autocomplete="off" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="judul">Judul Buku </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="judul" class="form-control" placeholder="Masukkan Judul Buku" name="judul_buku" autocomplete="off" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="deskripsi">Deskripsi  </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="deskripsi" class="form-control" placeholder="Masukkan Deskripsi Buku" 
					name="deskripsi" autocomplete="off" required="required">
				</div>
			</div>

		<div class="form-group">
			<label for="id_kategori">Kategori</label>
			<?php $data= mysqli_query($koneksi, "SELECT * FROM tb_kategori") ?>
			<select class="custom-select form-control" name="id_kategori" autocomplete="off" required>
				<?php while ($d= mysqli_fetch_assoc($data)) : ?>
				<option value="<?php echo $d['id_kategori']; ?>"><?php echo $d['kategori']; ?></option>
			<?php endwhile; ?>
			</select> 
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