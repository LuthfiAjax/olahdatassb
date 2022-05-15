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
    $get1 = mysqli_query($koneksi, "select * from pengguna");
    $count1 = mysqli_num_rows($get1); //menghitung jumlah kolom 

    // ambil data
    $get2 = mysqli_query($koneksi, "select * from club");
    $count2 = mysqli_num_rows($get2); //menghitung jumlah kolom 

    // ambil data
    $get3 = mysqli_query($koneksi, "select * from pemain");
    $count3 = mysqli_num_rows($get3); //menghitung jumlah kolom 

     // ambil data
    $get4 = mysqli_query($koneksi, "select * from pesan");
    $count4 = mysqli_num_rows($get4); //menghitung jumlah kolom 

    


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
    <title>SSBKU Dashboard</title>
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
                <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="anggota.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>SSB</a>
                <a href="pemain.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Siswa</a>
                <a href="hak_akses.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Hak akses</a>
                <a href="chat.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Chat</a>
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
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><b><?php echo $_SESSION['Full_nama'];?></b>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"> <?= $count1; ?> </h3>
                                <p class="fs-5">Anggota</p>
                            </div>
                            <a href="hak_akses.php"><i class="fas sa-solid fa-address-book fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?= $count3; ?> </h3>
                                <p class="fs-5">Total Siswa</p>
                            </div>
                            <a href="pemain.php"><i class="fas fa-solid fa-address-card fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?= $count2; ?> </h3>
                                <p class="fs-5">Total SSB</p>
                            </div>
                            <a href="anggota.php"><i class="fas fa-solid fa-clone fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?= $count4; ?> </h3>
                                <p class="fs-5">Total Chat</p>
                            </div>
                            <a href="chat.php"><i class="fas fa-solid fa-bell fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
                        </div>
                    </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Traking dan Cetak Data</h3>
                    <div class="col">
                         <form action="" method="POST" class="d-flex">
                             <input autocomplete="off" name="cari" class="form-control me-2" type="search" placeholder="Masukan Data yang ingin dicari berdasarkan NISN | Nama | Klub" aria-label="Search" autofocus="">
                            <button name="Search" class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            
                            <br>
                            <?php 
                                $cari = $_POST['cari'];
                            ?>

                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr align="center">
                                    <th scope="col" width="100">NISN </th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">SSB</th>
                                    <th scope="col">Terdaftar</th>
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
                                    <td><?php echo $d['terdaftar']; ?></td>
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
                                        echo '<tr><td colspan="6" align="center" style="color: red">Data Yang dicari Tidak ditemukan<span style="color: black">klik Seacrh untuk menampilkan semua data<span></td></tr>';
                                    }
			                    ?> 
                              </tbody>  
                        </table>
                        <a target="_blank" class="btn btn-primary mb-3" href="cetak.php?cetak=<?php echo $cari; ?>"><i class="fa fa-print "></i> Cetak</a>
                            
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