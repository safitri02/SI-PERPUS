<?php 
include 'koneksi.php';

$id= $_GET["id_siswa"];
$d= mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_siswa= $id");
$data= mysqli_fetch_assoc($d);

if (isset($_POST["simpan"])) {
	$nisn= $_POST["nisn"];
	$nama= $_POST["nama"];
	$kelas= $_POST["kelas"];
	$alamat= $_POST["alamat"];
	$telp= $_POST["telp"];

		$sql= mysqli_query($koneksi, "UPDATE tb_siswa SET 
		nisn='$nisn',
		nama= '$nama',
		kelas= '$kelas',
		alamat= '$alamat',
		telp= '$telp' WHERE id_siswa= '$id' ");
	mysqli_query($koneksi, $sql);

if ($sql) {
echo "
      <script>
      alert('Data Siswa Berhasil Diedit');
	  document.location.href='index.php?menu=siswa';
      </script>
      ";
    } else{
      echo "
      <script>
      alert('Data Siswa Gagal Diedit');
      document.location.href='index.php?menu=siswa';
      </script>
      ";
	    
	 }
	}

?>

<div class="container-fluid">
<!-- Page Heading -->
<div class="clearfix">
<h1 class="h3 mb-4 text-gray-800 float-left">Edit Data Siswa</h1>
<a href="index.php?menu=siswa" class="btn btn-secondary btn-sm float-right"><i class="fas fa-reply"></i> Kembali</a>
</div>
<hr>
<div class="row">
<div class="col-md-8">
<div class="card">
	<div class="card-header">
		<span class="text-primary"><strong>Silahkan Edit data di bawah ini!</strong></span>
	</div>
	<div class="card-body">
		<form action="" method="POST">
			<div class="form-group">
				<label for="nama">Nama Siswa </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-user"></i></div>
					</div>
						<input type="text" id="nama" class="form-control" placeholder="Masukan Nama Lengkap" name="nama" autocomplete="off" required="required" value="<?= $data["nama"]; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="kelas">Kelas </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-university"></i></div>
					</div>
					<input type="text" id="kelas" class="form-control" placeholder="Masukan Kelas" name="kelas" autocomplete="off" required="required" value="<?= $data["kelas"]; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="nisn">Nisn </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa fa-address-card"></i></div>
					</div>
					<input type="text" id="nisn" class="form-control" placeholder="Masukan Nisn Siswa" name="nisn" autocomplete="off" required="required" value="<?= $data["nisn"]; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-home"></i></div>
					</div>
					<input type="text" id="ruangan" class="form-control" placeholder="Masukan Alamat" name="alamat" autocomplete="off" required="required" value="<?= $data["alamat"]; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="telp">No Telepon </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-phone"></i></div>
					</div>
					<input type="text" id="ruangan" class="form-control" placeholder="Masukan No Telp" name="telp" autocomplete="off" required="required" value="<?= $data["telp"]; ?>">
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