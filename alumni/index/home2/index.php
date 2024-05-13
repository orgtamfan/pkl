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
                    <?php
            if(isset($_SESSION['user']['id_siswa'])) {
                $id_siswa = $_SESSION['user']['id_siswa'];
                echo '<li class="nav-item"><a href="profile.php?id_pengguna='.$id_pengguna.'" class="nav-link">Profile</a></li>';
            } else {
                echo '<li class="nav-item"><a href="../../login.php" class="nav-link">Login</a></li>';
            }
        ?>
        <li class="nav-item"><a class="nav-link" href="moment.php">Moment</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
            <div class="container">
            <div class="masthead-subheading">Welcome! <?php echo $_SESSION['user']['nama'] ?> </div>
                <div class="masthead-heading text-uppercase">Di Website Alumni</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Lebih Lanjut</a>
            </div>
        </header>
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Alumni XII PPLG</h2>
                    <h3 class="section-subheading text-muted">Beberapa Alumni XII PPLG dari SMKN 4 Bandar Lampung</h3><br>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 21";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/1.jpg">
                            </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Adinda Deswita Maharani</div>
                            <div class="portfolio-caption-subheading text-muted">Lolos Ke ITERA</div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 22";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                    ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Adinda Karunia Putri</div>
                                <div class="portfolio-caption-subheading text-muted">Bekerja</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 23";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Amanda Saras</div>
                                <div class="portfolio-caption-subheading text-muted">Lolos Unila</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 24";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Arya Fatawa</div>
                                <div class="portfolio-caption-subheading text-muted">Lolos Unila</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 25";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Bimo Auliano</div>
                                <div class="portfolio-caption-subheading text-muted">Lolos Ke ITERA</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 26";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Bunga Dwi L.</div>
                                <div class="portfolio-caption-subheading text-muted">Bekerja</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 27";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/1.jpg">
                            </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Daffa Wijaya</div>
                            <div class="portfolio-caption-subheading text-muted">Bekerja</div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 28";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                    ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dick Richard</div>
                                <div class="portfolio-caption-subheading text-muted">Berniaga</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 29";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Farhan Febrian</div>
                                <div class="portfolio-caption-subheading text-muted">Bekerja</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 30";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Fauzan Ahnaf</div>
                                <div class="portfolio-caption-subheading text-muted">Bekerja</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 31";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Firstian Alvazo</div>
                                <div class="portfolio-caption-subheading text-muted">Bekerja</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 32";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Greys Olan Siallagan</div>
                                <div class="portfolio-caption-subheading text-muted">Bekerja</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 33";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/1.jpg">
                            </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Hanif Tresna</div>
                            <div class="portfolio-caption-subheading text-muted">Lolos ITERA</div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 34";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                    ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Idha Nura Santi</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 49";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Rizka Salsabila</div>
                                <div class="portfolio-caption-subheading text-muted">Polwan</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <?php
                                        require '../../koneksi.php';

                                        $sql = "SELECT id_siswa, nama, tempat, tgl_lahir, thn_lulus FROM murid WHERE id_siswa = 44";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<p>' . $row["nama"] . '</p>';
                                                echo '<p>' . $row["tempat"] . '</p>';
                                                echo '<p>' . $row["tgl_lahir"] . '</p>';
                                                echo '<p>' . $row["thn_lulus"] . '</p>';
                                            }
                                        } else {
                                            echo "Tidak ada data dalam tabel.";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <img class="img-fluid" src="../../assets/img/murid/4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Nazahra Adila</div>
                                <div class="portfolio-caption-subheading text-muted">Lolos Unila</div>
                            </div>
                        </div>
                    </div>
                                        
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>