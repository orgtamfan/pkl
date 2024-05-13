<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Halaman Alumni</title>
        <link rel="icon" type="image/x-icon" href="../assets/logo(no bg).ico" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="../assets/logo(no bg).ico" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Keunggulan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Prestasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Guru</a></li>
                        <li class="nav-item"><a class="nav-link" href="../login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang!</div>
                <div class="masthead-heading text-uppercase">Di Website Alumni</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Lebih Lanjut</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Keunggulan</h2><br>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Cokro Mart</h4>
                        <p class="text-muted">Memiliki tempat belanja sendiri yang di oprasikan oleh siswa dari SMKN 4 Bdl sendiri</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Lab Komputer </h4>
                        <p class="text-muted">Memiliki lab komputer yang bertujuan untuk memberi ilmu tentang teknologi tentang dunia komputer</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Keamanan</h4>
                        <p class="text-muted">Memiliki tingkat keamanan yang ketat di bidang CYBER maupun keamanan Sekolah</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Alumni Berprestasi</h2>
                    <h3 class="section-subheading text-muted">Beberapa Alumni yang Memiliki Keunggulan dan Prestasi Lebih</h3><br>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                <?php
                                require '../koneksi.php';

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
                            <img class="img-fluid" src="../assets/img/murid/1.jpg">
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Olan Siallagan</div>
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
                                require '../koneksi.php';

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
                                <img class="img-fluid" src="../assets/img/murid/2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Bimo Auliano</div>
                                <div class="portfolio-caption-subheading text-muted">ITERA</div>
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
                                require '../koneksi.php';

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
                                <img class="img-fluid" src="../assets/img/murid/3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Arya Fatawa</div>
                                <div class="portfolio-caption-subheading text-muted">Unila</div>
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
                                require '../koneksi.php';

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
                                <img class="img-fluid" src="../assets/img/murid/4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Adinda Deswita</div>
                                <div class="portfolio-caption-subheading text-muted">ITERA</div>
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
                                require '../koneksi.php';

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
                                <img class="img-fluid" src="../assets/img/murid/5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Rizka salsabila</div>
                                <div class="portfolio-caption-subheading text-muted">Polwan</div>
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
                                require '../koneksi.php';

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
                                <img class="img-fluid" src="../assets/img/murid/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Nazahra Adila Sudrajat</div>
                                <div class="portfolio-caption-subheading text-muted">Unila</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">TENTANG</h2><br>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>INFORMASI</h4>
                                <h4 class="subheading">13 DESEMBER 2023</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Untuk memberikan informasi mengenai alumni dan lowongan pekerjaan dan prestasi prestasi</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>INFORMASI</h4>
                                <h4 class="subheading">Alumni</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Memberikan lulusan lulusan terbaik dan memiliki prestasi di bidang tertentu dan di bekali keahlian khusus</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>INFORMASI</h4>
                                <h4 class="subheading">Sekolah SMKN 4 BDL</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Memberikan pelajaran pelajaran di bidang yang di tujukan memiliki banyak jurusan dan cabang ekskul dan dengan di fasilitasi </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>INFORMASI</h4>
                                <h4 class="subheading">WEBSITE ALUMNI</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Memberikan informasi informasi tentang alumni dan berita terkini dan memaparkan tentang website untuk daftar daftar alumni</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Mari
                                <br />
                                Jadi bagian 
                                <br />
                                Dari Kami
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Guru RPL</h2>
                    <h3 class="section-subheading text-muted">Guru yang Mengajar Kami</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../assets/img/team/1.jpg" alt="..." />
                            <h4>Dafriel Ashadi</h4>
                            <p class="text-muted">Guru PPLG</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../assets/img/team/2.jpg" alt="..." />
                            <h4>Dian Sri Purwanti</h4>
                            <p class="text-muted">Kepala Jurusan</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../assets/img/team/3.jpg" alt="..." />
                            <h4>Ahmad Eko Saputra</h4>
                            <p class="text-muted">Guru IoT</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Semangat Melayani Adalah Visi dan Misi dari Kami.</p></div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy;</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
