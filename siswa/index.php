<?php 
include 'koneksi.php';

?>


<div class="container-fluid">
					<!-- Page Heading -->
<div class="clearfix">
	<h1 class="h3 mb-4 text-gray-800 float-left">Data Siswa</h1>
	<a href="index.php?menu=tambah_siswa" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus"></i> Tambah Data</a>
</div>
<hr>
	<div class="card">
	<div class="card-header">Daftar Siswa</div>
	<div class="card-body">
		<div class="table-responsive">
			
		</div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
				<thead>
					<tr role="row">
						<th> No </th>
						<th> Nama </th>
						<th> Kelas </th>
						<th> Nisn </th>
						<th> Alamat </th>
						<th> No Telp </th>
						<th> Aksi </th>
					</tr>
				</thead>
				<tbody>
	<?php 

	$data= mysqli_query($koneksi, "SELECT * FROM tb_siswa");		

	$no = 1;
	while($a = mysqli_fetch_assoc($data)) : ?>

	<tr role="row" class="odd">
	<td class="sorting_1"><?= $no++ ?></td>
	<td> <?= $a["nama"]; ?> </td>
	<td> <?= $a["kelas"]; ?> </td>
	<td> <?= $a["nisn"]; ?></td>
	<td> <?= $a["alamat"]; ?> </td>
	<td> <?= $a["telp"]; ?> </td>
	<td>
		<a href="index.php?menu=edit_siswa&id_siswa= <?=$a["id_siswa"]; ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Ubah</a>
		<a href="index.php?menu=hapus_siswa&id_siswa= <?= $a["id_siswa"] ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Hapus</a>
	</td>
		</tr>
			<?php endwhile; ?>
	</tbody>
			</table>
		</div>
	</div>
</div>
</div>