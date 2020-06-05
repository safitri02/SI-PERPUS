<?php 
include 'koneksi.php';

?>


<div class="container-fluid">
					<!-- Page Heading -->
<div class="clearfix">
	<h1 class="h3 mb-4 text-gray-800 float-left">Data Buku</h1>
	<a href="index.php?menu=tambah_buku" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus"></i> Tambah Data</a>
</div>
<hr>
	<div class="card">
	<div class="card-header">Daftar Buku</div>
	<div class="card-body">
		<div class="table-responsive">
			

		</div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
				<thead>
					<tr role="row">
						<th> No </th>
						<th> Kode Buku </th>
						<th> Judul Buku </th>
						<th> Stok  </th>
						<th> Deskripsi  </th>
						<th> Kategori  </th>
						<th> Aksi </th>
					</tr>
				</thead>
				<tbody>
	<?php 

		$data= mysqli_query($koneksi, "SELECT * FROM tb_buku JOIN tb_kategori 
			ON tb_buku.id_kategori= tb_kategori.id_kategori");
	
	$no = 1;
	while($a = mysqli_fetch_assoc($data)) : ?>

	<tr role="row" class="odd">
	<td class="sorting_1"><?= $no++ ?></td>
	<td> <?= $a["kode_buku"]; ?> </td>
	<td> <?= $a["judul_buku"]; ?> </td>
	<td> <?= $a["stok"];  ?> </td>
	<td> <?= $a["deskripsi"]; ?></td>
	<td> <?= $a["kategori"]; ?> </td>
	<td>
		<a href="index.php?menu=edit_buku&kode_buku= <?= $a["kode_buku"]; ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Ubah</a>
		<a href="index.php?menu=hapus_buku&kode_buku= <?= $a["kode_buku"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Hapus</a>
	</td>
		</tr>
			<?php endwhile; ?>
	</tbody>
			</table>
		</div>
	</div>
</div>
</div>