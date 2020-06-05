<?php 
include 'koneksi.php';


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
	<form action="index.php?menu=prosespengembalian" method="POST">

	<div class="form-group">
				<label for="judul_buku">Nama Peminjam </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<select class="custom-select form-control" id="nama" name="nama" onchange="changeValue(this.value)">
					<option> --- Pilih ---</option>
		<?php 			
			$data= mysqli_query($koneksi, "SELECT * FROM tb_transaksi JOIN tb_siswa ON 
			tb_transaksi.id_siswa=tb_siswa.id_siswa JOIN tb_buku ON tb_transaksi.id_buku=tb_buku.id_buku WHERE status='Pinjam' ");

			$jsArray= "var dataPinjam = new Array();";
		 ?>
						<?php while ($a= mysqli_fetch_assoc($data)) : ?>
           			<option value=" <?= $a["id_siswa"]; ?> "><?= $a["nama"]; ?> </option>

           			<?php 	
           			$jsArray .= "dataPinjam['".$a['id_siswa']."'] = judul_buku: '".$w['id_buku']."' , 
              				nama: '".$w['id_siswa']."' , tgl_pinjam: '".$w['tgl_pinjam']."' , 
              				tgl_kembali: '".$w['tgl_kembali']."'

              				 };";

              			?>
           		<?php endwhile; ?>
			 	</select> 
				</div>
			</div>
<!-- 			<div class="form-group">
				<label for="judul_buku">Judul Buku </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<select class="custom-select form-control" name="judul_buku">
           			<option>  </option>
			 	</select> 
				</div>
			</div> -->
			<div class="form-group">
				<label for="tgl_pinjam">Judul Buku </label>
					<div class="input-group">
						<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="tgl_pinjam" class="form-control" id="judul_buku" name="judul_buku" autocomplete="off" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="tgl_pinjam">Tanggal Pinjam </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text"  id="tgl_pinjam" id="tgl_pinjam" class="form-control" name="tgl_pinjam" autocomplete="off" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="tgl_kembali">Tanggal Kembali </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="tgl_kembali" id="tgl_kembali" class="form-control"  name="tgl_kembali" autocomplete="off" required="required">
				</div>
			</div>

			<div class="form-group">
				<label for="denda">Denda </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="denda" class="form-control" name="denda" autocomplete="off" required="required">
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

<script type="text/javascript">
	<?php echo $jsArray; ?>

	function changeValue(x) {
	document.getElementById('nama').value = dataPinjam[x].id_siswa;
	document.getElementById('judul_buku').value = dataPinjam[x].id_buku;
	document.getElementById('tgl_pinjam').value = dataPinjam[x].tgl_pinjam;
	document.getElementById('tgl_kembali').value = dataPinjam[x].tgl_kembali;


};

</script>