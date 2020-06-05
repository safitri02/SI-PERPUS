<?php 
include 'koneksi.php';

?>


<div class="container-fluid">
					<!-- Page Heading -->
<!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<div class="clearfix">
	<h1 class="h3 mb-4 text-gray-800 float-left">Data Transaksi</h1>
	<a href="index.php?menu=tambah_transaksi" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus"></i> Tambah Data</a>
</div>
<hr>
	<div class="card">
	<div class="card-header">Halaman Transaksi</div>
	<div class="card-body">
		<div class="table-responsive">
			

		</div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
				<thead>
					<tr role="row">
						<th> No </th>
						<th> Nama </th>
						<th> Judul Buku  </th>
						<th> Tanggal Pinjam </th>
						<th> Tanggal Kembali </th>
						<th> Status </th> 
					</tr>
				</thead>
				<tbody>
	<?php 
			$data= mysqli_query($koneksi, "SELECT * FROM tb_transaksi JOIN tb_siswa ON 
		tb_transaksi.id_siswa=tb_siswa.id_siswa JOIN tb_buku ON tb_transaksi.id_buku=tb_buku.id_buku WHERE status='Pinjam' ");
	
	$no = 1;

while ($a= mysqli_fetch_assoc($data)) : ?>

	<tr role="row" class="odd">
	<td class="sorting_1"><?= $no++ ?> </td>
	<td> <?= $a["nama"]; ?> </td>
	<td> <?= $a["judul_buku"]; ?> </td>
	<td> <?= $a["tgl_pinjam"]; ?> </td>
	<td> <?= $a["tgl_kembali"]; ?> </td>
	<td> <?= $a["status"]; ?> </td>
	</tr>
				</tbody>
			<?php endwhile; ?>
			</table>
		</div>
	</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

  <script type="text/javascript"></script>

  <script>
  $(function () {
    $("#dataTable").DataTable();
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
