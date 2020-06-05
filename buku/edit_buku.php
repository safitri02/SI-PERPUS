<?php  

include 'koneksi.php';

$kd= $_GET["kode_buku"];

$a= mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE kode_buku = $kd");
$edit= mysqli_fetch_assoc($a);

if (isset($_POST["simpan"])) {

	$kode= $_POST["kode"];
	$judul= $_POST["judul_buku"];
	$deskripsi= $_POST["deskripsi"];
	$kategori= $_POST["id_kategori"];

	$sql = mysqli_query($koneksi, "UPDATE tb_buku SET kode='$kode', judul_buku='$judul', deskripsi='$deskripsi', 
		kategori='$kategori' WHERE kode_buku= $kd "  );

	if ($sql) {
		echo "
			<script> 
			alert('Data Buku Berhasil Diedit'); 
			document.location.href='index.php?menu=buku';
			</script>
		";
	} else{
		echo "
			<script> 
			alert('Data Buku Gagal Diedit'); 
			document.location.href='index.php?menu=edit_buku';
			</script>
		";
	}

}

?>


<div class="container-fluid">

<!-- Page Heading -->
<div class="clearfix">
<h1 class="h3 mb-4 text-gray-800 float-left">Edit Data Buku</h1>
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
						 value= "<?= $edit["kode_buku"]; ?>"  name="kode" autocomplete="off" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="judul">Judul Buku </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="judul" class="form-control" placeholder="Masukkan Judul Buku" name="judul_buku" autocomplete="off"  value= "<?= $edit["judul_buku"]; ?>"  required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="deskripsi">Deskripsi  </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="deskripsi" class="form-control" placeholder="Masukkan Deskripsi Buku" 
					name="deskripsi"  value= "<?= $edit["deskripsi"]; ?>"  autocomplete="off" required="required">
				</div>
			</div>

		<div class="form-group">
			<label for="id_kategori">Kategori</label>
			<?php $data= mysqli_query($koneksi, "SELECT * FROM tb_kategori") ?>
			<select class="custom-select form-control" name="id_kategori" autocomplete="off" required>
				<?php while ($d= mysqli_fetch_assoc($data)) : ?>
				<option value="<?php echo $d['id_kategori']; ?>"><?= $edit['kategori']; ?></option>
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