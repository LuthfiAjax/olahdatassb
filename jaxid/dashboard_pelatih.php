<!-- Fungsi Session -->
<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');	
} else {
	include "koneksi.php";
?>
<!-- End -->

<?php
    require "koneksi.php";
    error_reporting(0);

     // ambil data
    $get2 = mysqli_query($koneksi, "select * from club");
    $count2 = mysqli_num_rows($get2); //menghitung jumlah kolom 

    // ambil data
    $get3 = mysqli_query($koneksi, "select * from pemain");
    $count3 = mysqli_num_rows($get3); //menghitung jumlah kolom 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/dashboard.css" />
    <title>SSBKU Pelatih</title>
</head>
      <!-- Fungsi Waktu Session -->
      <?php
				$timeout = 10; // Set timeout minutes
				$logout_redirect_url = "../index.php"; // Set logout URL

				$timeout = $timeout * 60; // Converts minutes to seconds
				if (isset($_SESSION['start_time'])) {
					$elapsed_time = time() - $_SESSION['start_time'];
					if ($elapsed_time >= $timeout) {
						session_destroy();
						echo "<script>alert('Sesi Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
					}
				}
				$_SESSION['start_time'] = time();
				?>
				<?php } ?>
				<!-- End -->
<body>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>SSBKU</div>
            <div class="list-group list-group-flush my-3">
                <a href="dashboard_pelatih.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="klub_pelatih.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>SSB</a>
                <a href="siswa_pelatih.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Siswa Ku</a>
                <a href="mutasi_siswa.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Mutasi Siswa</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0"><i>Wellcome coach</i> <?php echo $_SESSION['nama_pemilik'];?></h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-6">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?= $count2; ?> </h3>
                                <p class="fs-5">SSB Terafiliasi</p>
                            </div>
                            <i class="fas  fa-address-book fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?= $count3; ?> </h3>
                                <p class="fs-5">Siswa Terdaftar</p>
                            </div>
                            <i
                                class="fas fa-address-card fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Seluruh Data Siswa Terdaftar SSBKU.com</h3>
                    
                    <div class="col">
                        <form action="" method="POST" class="d-flex">
                             <input autocomplete="off" name="cari" class="form-control me-2" type="search" placeholder="Masukan Data yang ingin dicari berdasarkan NISN | Nama | Klub" aria-label="Search" autofocus="">
                            <button name="Search" class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            <br>
                            <?php 
                                $cari = $_POST['cari'];
                            ?>
                            <br>
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr align="center">
                                    <th scope="col" width="100">NISN </th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">SSB</th>
                                    <th scope="col">Kelahiran</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php 
                                    if($cari != ''){
                                        $data = mysqli_query($koneksi,"select * from pemain where nisn like '%".$cari."%' or
                                        nama_pemain like '%".$cari."%' or nama_club like '%".$cari."%' ");
                                    }else{
                                        $data = mysqli_query($koneksi,"select * from pemain");
                                    }
                                    
                                    if(mysqli_num_rows($data)){
                                    while($d = mysqli_fetch_array($data)){
                                        ?>
                                <tr align="center">
                                    <td><?php echo $d['nisn']; ?></td>
                                    <td><?php echo $d['nama_pemain']; ?></td>
                                    <td><?php echo $d['nama_club']; ?></td>
                                    <td><?php echo $d['kelahiran']; ?></td>
                                    <td><?php echo $d['alamat_pemain']; ?></td>
                                    <td>
                                        <div>
                                            <a class="btn btn-sm btn-success tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Siswa" href="detail_siswa_pelatih.php?detail=<?php echo $d['nisn']; ?>"><span class="fas fa-align-justify"> </span></a>
                                            <!-- <a onclick="return confirm ('Yakin hapus <?php echo $d['nama_pemain'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Siswa" href="hapus_siswa.php?hal=hapus&kd=<?php echo $d['nisn'];?>"><span class="fa fa-lg fa-trash"> </span></a>
                                            <a onclick="return confirm ('Yakin Edit <?php echo $d['nama_pemain'];?>.?');" class="btn btn-sm btn-primary tooltips" data-placement="bottom" data-toggle="tooltip" title="Edit Siswa" href="edit_siswa.php?hal=hapus&kd=<?php echo $d['nisn'];?>"><span class="fa fa-lg fa-edit"> </span></a> -->
                                        </div>
                                    </td>
                                    
                                </tr>
                                <?php
                                    }}else{
                                        echo '<tr><td colspan="6" align="center" style="color: red">Data Yang dicari Tidak ditemukan. <span style="color: black">klik Seacrh untuk menampilkan semua data<span></td></tr>';
                                    }
			                    ?> 
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>