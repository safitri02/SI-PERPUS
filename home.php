<?php  
include 'koneksi.php';

$siswa= mysqli_query($koneksi, "SELECT * FROM tb_siswa");
$s= mysqli_num_rows($siswa);

$buku= mysqli_query($koneksi, "SELECT * FROM tb_buku");
$b= mysqli_num_rows($buku);

$transaksi= mysqli_query($koneksi, "SELECT * FROM tb_transaksi");
$pengembalian= mysqli_query($koneksi, "SELECT * FROM tb_pengembalian");
$p= mysqli_num_rows($pengembalian);
$t= mysqli_num_rows($transaksi);
$gabung= $p + $t;

$kat= mysqli_query($koneksi, "SELECT * FROM tb_kategori");
$k= mysqli_num_rows($kat);


?>


<div class="container"> 
<div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <h4 class="mr-2">Jumlah Siswa</h4>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <h4 class="float-left"><?php echo $s; ?></h4>
                <span class="float-right">
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <h4 class="mr-2">Jumlah Buku</h4>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <h4 class="float-left"><?php echo $b; ?></h4>
                <span class="float-right">
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <h4 class="mr-2">Jumlah Transaksi</h4>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <h4 class="float-left"><?php echo $gabung; ?></h4>
                <span class="float-right">
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <h4 class="mr-2">Jumlah Kategori</h4>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <h4 class="float-left"> <?php echo $k; ?> </h4>
                <span class="float-right">
                </span>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-bar"></i>
                Peminjaman Dan Pengembalian</div>
              <div class="card-body">
                <canvas id="myBarChart" width="100%" height="50"></canvas>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-pie"></i>
                Data Perpustakaan</div>
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
        </div>
    </div>

<script type="text/javascript">

// // Set new default font family and font color to mimic Bootstrap's default styling
// Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
// Chart.defaults.global.defaultFontColor = '#292b2c';

// // Pie Chart Example
// var ctx = document.getElementById("myPieChart");
// var myPieChart = new Chart(ctx, {
//   type: 'pie',
//   data: {
//     labels: ["Siswa", "Kategori", "Buku", "Transaksi"],
//     datasets: [{
//       data: ["Siswa", "Kategori","Buku","Transaksi"],
//       backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
//     }],
//   },
// });

</script>















