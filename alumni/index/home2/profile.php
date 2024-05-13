<?php 
include '../../koneksi.php';
session_start();

$query = mysqli_query($conn, "SELECT * FROM murid");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Halaman Alumni</title>
        <link rel="icon" type="image/x-icon" href="../../assets/logo(no bg).ico" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/style.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="../../assets/logo(no bg).ico" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Kembali</a></li>
                    </ul>
                </div>
            </div>
        </nav>
            <div class="container">
                <div class="masthead-heading text-uppercase">Di Website Alumni</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Lebih Lanjut</a>
            </div><br>
            <section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">
                            </div>
                            <div class="col-lg-6 px-xl-10">
            <?php
include '../../koneksi.php';

if(isset($_SESSION['user']['id_siswa'])) {
    $id_siswa = $_SESSION['user']['id_siswa'];

    $query = mysqli_query($conn, "SELECT * FROM murid WHERE id_siswa = $id_siswa");

    if ($query) {
        $row = mysqli_fetch_assoc($query);

        echo "<ul class='list-unstyled mb-1-9'>";
        echo "<li class='mb-2 mb-xl-3 display-28'><span class='display-26 text-secondary me-2 font-weight-550'>NISN:</span>" . $row["nisn"] . "</li>";
        echo "<li class='mb-2 mb-xl-3 display-28'><span class='display-26 text-secondary me-2 font-weight-550'>NIS:</span>" . $row["nis"] . "</li>";
        echo "<li class='mb-2 mb-xl-3 display-28'><span class='display-26 text-secondary me-2 font-weight-550'>Nama:</span>" . $row["nama"] . "</li>";
        echo "<li class='mb-2 mb-xl-3 display-28'><span class='display-26 text-secondary me-2 font-weight-550'>Tempat Tanggal Lahir:</span>" . $row["tempat"] . " " . $row["tgl_lahir"] . "</li>";
        echo "<li class='mb-2 mb-xl-3 display-28'><span class='display-26 text-secondary me-2 font-weight-550'>Tahun Kelulusan:</span>" . $row["thn_lulus"] . "</li>";
        echo "</ul>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    header('Location: login.php');
    exit();
}
?>
    <div class="masthead-subheading"><a href="logout.php"> <b>LOGOUT!</b></a></div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>