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
                        <li class="nav-item"><a class="nav-link" href="index.php">Kembali</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
            <div class="container">
            <div class="masthead-subheading">Welcome! <?php echo $_SESSION['user']['nama'] ?> </div>
                <div class="masthead-heading text-uppercase">Inilah Moment yang Telah Kamu Lewati</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Lanjut</a>
            </div>
        </header>
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kenangan Kamu</h2>
                    <h3 class="section-subheading text-muted">Beberapa Kenangan XII PPLG</h3><br>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <img class="img-fluid" src="../../assets/img/memory/1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Hari Batik</div>
                                <div class="portfolio-caption-subheading text-muted">Mei 2023</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <img class="img-fluid" src="../../assets/img/memory/2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Melayat ke Rumah Duka Rizki</div>
                                <div class="portfolio-caption-subheading text-muted">Juni 2023</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <img class="img-fluid" src="../../assets/img/memory/3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Kunjungan Industri</div>
                                <div class="portfolio-caption-subheading text-muted">Mei 2023</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <img class="img-fluid" src="../../assets/img/memory/4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Juara Lomba Mobile Legends</div>
                                <div class="portfolio-caption-subheading text-muted">Agustus 2023</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <img class="img-fluid" src="../../assets/img/memory/5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pesantren Kilat</div>
                                <div class="portfolio-caption-subheading text-muted">September 2023</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <img class="img-fluid" src="../../assets/img/memory/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Foto Studio Sekelas</div>
                                <div class="portfolio-caption-subheading text-muted">Juli 2023</div>
                            </div>
                        </div>
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