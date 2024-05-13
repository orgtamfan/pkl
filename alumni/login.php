<?php 
include 'koneksi.php';
session_start();

if (isset($_POST['nisn'])) {

    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];

    $cek_siswa = mysqli_query($conn, "SELECT * FROM murid WHERE nisn='$nisn' AND nis='$nis'");
    if (mysqli_num_rows($cek_siswa) > 0) {
        $_SESSION['user'] = mysqli_fetch_array($cek_siswa);
        $_SESSION['id_siswa']=$data['id_siswa'];
        echo '<script>alert("Selamat, anda berhasil Login");window.location="index/home2/index.php";</script>';
    }else{
        echo '<script>alert("Username atau Password Salah");</script>';
     }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Web Alumni SMK 4</title>
        <link rel="icon" type="image/x-icon" href="assets/logo(no bg).ico" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Background Video-->
        <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/mp4/bg.mp4" type="video/mp4" /></video>
        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <h1 class="fst-italic lh-1 mb-4">Selamat Datang</h1>
                    <p class="mb-5">SMK Negeri 4 Bisa!!</p>
                    <form id="contactForm" method="post">
                        <div class="row input-group-newsletter">
                            <div class="col"><input class="form-control" name="nisn" id="nisn" type="text" placeholder="Masukkan NISN" aria-label="Masukkan NISN..." required></div>
                            <div class="col"><input class="form-control" name="nis" id="nis" type="text" placeholder="Masukkan NIS" aria-label="Masukkan NIS..." required></div>
                            <div class="col-auto"><button class="btn btn-primary" id="submitButton" type="submit"><a>MASUK!</a></button></div>
                        </div>
                        <p class="mb-5">Belum Terdaftar?<a style="margin-left: 5px;" href="daftar/daftar.php">Daftar Sekarang!</a></p>
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="social-icons">
            <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
                <a class="btn btn-dark m-3" href="https://wa.me/089636344630" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a class="btn btn-dark m-3" href="https://www.instagram.com/smknegeri4bandarlampung/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script>

        </script>
    </body>
</html>
