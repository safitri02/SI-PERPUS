<?php 
include 'koneksi.php';

if (isset($_POST["simpan"])) {
    $kt= $_POST["kode_kategori"];
    $kat= $_POST["kategori"];

    $sql= mysqli_query($koneksi, "INSERT INTO tb_kategori VALUES ('', '$kt', '$kat') ");
    
    if ($sql) {
       echo "
      <script>
      alert('Kategori Berhasil Ditambah');
       header('location:index.php?menu=kategori');
      </script>
      ";
    } else{
      echo "
      <script>
      alert('Kategori Gagal Ditambahkan');
      </script>
      ";
    }
}

?>

<h1 class="h3 mb-4 text-gray-800">Halaman Kategori</h1>

<?php 
  $query= "SELECT max(kode_kategori) as maxKode FROM tb_kategori";
  $hasil= mysqli_query($koneksi, $query);
  $data= mysqli_fetch_array($hasil);
  $kode_kat= $data['maxKode'];
  $nourut= (int) substr($kode_kat, 4,4);
  $nourut++;
  $char= "KT";
  $kode= $char.sprintf("%03s", $nourut);
  ?>

<div class="content-wrapper">
            <div class="row" class="mt-3">
              <div class="col-lg-5 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Tambah Kategori </h4>
                        <form class="forms-sample" action="" method="post">
                          <div class="form-group">
                            <label for="kode_kategori">Kode Kategori</label>
                            <input type="text" class="form-control" id="kode_kategori" name="kode_kategori" readonly=""
                            value="<?php echo $kode ?>" autocomplete="off" required>
                          </div>
                          <div class="form-group">
                            <label for="kategori">Masukkan Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukan Kategori Baru" autocomplete="off" required>
                          </div>
                          <button type="submit" class="btn btn-success mr-2" name="simpan">Tambah</button>
                        </form>
                      </div>
                    </div>
                  </div>


              <div class="col-lg-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Kategori</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Kategori</th>
                          <th>Kategori </th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <?php $no=1; ?>
                    <?php $result= mysqli_query($koneksi, "SELECT * FROM tb_kategori "); ?>
                  <?php while ($data= mysqli_fetch_assoc($result)) : ?>
                      <tbody>
                        <tr>
                          <td> <?= $no++ ?> </td>
                          <td> <?= $data["kode_kategori"]; ?> </td>
                          <td> <?= $data["kategori"]; ?> </td>
                         <td>
                            <a href="index.php?menu=edit_kategori&id_kategori= <?= $data["id_kategori"]; ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Ubah</a>

                            <a href="index.php?menu=hapus_kategori&id_kategori= <?= $data["id_kategori"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Hapus</a>
                          </td>
                        </tr>
                  <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
             