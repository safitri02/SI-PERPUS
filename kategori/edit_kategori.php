<?php 
include 'koneksi.php';

$id= $_GET["id_kategori"];
$d= mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE id_kategori= '$id' ");
$a= mysqli_fetch_assoc($d);

if (isset($_POST["simpan"])) {
    $kt= $_POST["kode_kategori"];
    $kat= $_POST["kategori"];

    $sql= mysqli_query($koneksi, "UPDATE tb_kategori SET 
      kode_kategori= '$kt', kategori= '$kat' WHERE id_kategori=$id ");
    
    if ($sql) {
      echo "
      <script>
      alert('Kategori Berhasil Diedit');
      document.location.href='index.php?menu=kategori'
      </script>
      ";
    } else{
      echo "
      <script>
      alert('Kategori Gagal Diedit');
      document.location.href='index.php?menu=ubah_kategori'
      </script>
      ";
    }
}

?>

<h1 class="h3 mb-4 text-gray-800">Halaman Kategori</h1>

<div class="content-wrapper">
            <div class="row" class="mt-3">
              <div class="col-lg-5 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Ubah Kategori </h4>
                        <form class="forms-sample" action="" method="post">
                          <div class="form-group">
                            <label for="kode_kategori">Kode Kategori</label>
                            <input type="text" class="form-control" id="kode_kategori" name="kode_kategori" readonly=""
                            value="<?= $a["kode_kategori"]; ?>" autocomplete="off" required>
                          </div>
                          <div class="form-group">
                            <label for="kategori"> Kategori </label>
                            <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $a["kategori"]; ?>" autocomplete="off" required>
                          </div>
                          <button type="submit" class="btn btn-success mr-2" name="simpan">Simpan</button>
                           <a href="index.php?menu=kategori" class="btn btn-success mr-2"></i>&nbsp;&nbsp;Kembali</a>
                        </form>
                      </div>
                    </div>
                  </div>
