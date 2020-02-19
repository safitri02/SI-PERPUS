<?php 
include 'koneksi.php';



?>


<div class="container-fluid">
					<!-- Page Heading -->
<div class="clearfix">
	<h1 class="h3 mb-4 text-gray-800 float-left">Data Peminjam</h1>
	<a href="index.php?menu=tambah_peminjam" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus"></i> Tambah Data</a>
</div>
<hr>
	<div class="card">
	<div class="card-header">Daftar Peminjam</div>
	<div class="card-body">
		<div class="table-responsive">
			<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>

			</div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder=""  name="cari" aria-controls="dataTable"></label></div></div>

		</div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
				<thead>
					<tr role="row">
						<th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 5px;">No</th>
						<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Nama Barang: activate to sort column ascending" style="width: 200px;">Nama Peminjam </th>
						<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Jumlah Barang: activate to sort column ascending" style="width: 250px;">Judul Buku</th>
						<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Jumlah Barang: activate to sort column ascending" style="width: 80px;">Tanggal Pinjam</th>
						<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Kondisi Barang: activate to sort column ascending" style="width: 80px;">Tanggal Kembali</th>
						<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Aksi: activate to sort column ascending" style="width: 250px;" text-center>Aksi</th>
					</tr>
				</thead>
				<tbody>
	<?php 

	$data= mysqli_query($koneksi, "SELECT * FROM tb_peminjam ");		


	$no = 1;
	while($a = mysqli_fetch_assoc($data)) : ?>

	<tr role="row" class="odd">
	<td class="sorting_1"><?= $no++ ?></td>
	<td> <?= $a["nama_siswa"]; ?> </td>
	<td> <?= $a["judul_buku"]; ?> </td>
	<td> <?= $a["tgl_pinjam"]; ?></td>
	<td> <?= $a["tgl_kembali"]; ?> </td>
	<td>

		<a href="index.php?menu=edit_peminjaman&id_peminjam= <?=$a["id_peminjam"]; ?>" class="btn btn-sm btn-warning"><i></i>&nbsp;&nbsp;Pinjam</a>
		<a href="index.php?menu=edit_peminjaman&id_peminjam= <?=$a["id_peminjam"]; ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Ubah</a>
		<a href="index.php?menu=hapus_peminjaman&id_peminjam= <?= $a["id_peminjam"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Hapus</a>
	</td>
		</tr>
			<?php endwhile; ?>
	</tbody>
			</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
		</div>
	</div>
</div>
</div>