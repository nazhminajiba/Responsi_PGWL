<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sleman Kuy</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="storage\css\styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Sleman Kuy</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Preview</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">WEBGIS WISATA SLEMAN</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <a class="btn btn-primary btn-xl" href="{{ route('index-public')}}">MAP</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">WEBGIS WISATA SLEMAN</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Kabupaten Sleman, yang terletak di Provinsi Daerah Istimewa Yogyakarta, memiliki banyak destinasi wisata menarik. Dari keindahan alam seperti Gunung Merapi dan air terjun, hingga situs budaya dan sejarah seperti Candi Prambanan dan Museum Ullen Sentalu. 
                            Potensi wisata ini perlu dikelola dan dipromosikan dengan baik agar dapat menarik lebih banyak wisatawan.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Portfolio-->
        <div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="storage/img/boko.jpg" title="Project Name">
                    <img class="img-fluid portfolio-img" src="storage/img/boko.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Wisata</div>
                        <div class="project-name">Candi Boko</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="storage/img/bluelagoon.jpg" title="Project Name">
                    <img class="img-fluid portfolio-img" src="storage/img/bluelagoon.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Wisata</div>
                        <div class="project-name">Bluelagoon</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="storage/img/breksi.jpg" title="Project Name">
                    <img class="img-fluid portfolio-img" src="storage/img/breksi.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Wisata</div>
                        <div class="project-name">Tebing Breksi</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="storage/img/bunker.jpg" title="Project Name">
                    <img class="img-fluid portfolio-img" src="storage/img/bunker.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Wisata</div>
                        <div class="project-name">Bunker Kaliadem</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="storage/img/klangon.jpg" title="Project Name">
                    <img class="img-fluid portfolio-img" src="storage/img/klangon.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Wisata</div>
                        <div class="project-name">Bukit Klangon</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="storage/img/prambanan.jpg" title="Project Name">
                    <img class="img-fluid portfolio-img" src="storage/img/prambanan.jpg" alt="..." />
                    <div class="portfolio-box-caption p-3">
                        <div class="project-category text-white-50">Wisata</div>
                        <div class="project-name">Candi Prambanan</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


        <section class="page-section" id="contact">
    <div class="container text-center">
        <h2 class="mt-0">Contact</h2>
        <hr class="divider" />
        <div class="row justify-content-center">
            <div class="col-md-4 mb-5">
                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                <div>Phone: +62 813 3148 5604</div>
            </div>
            <div class="col-md-4 mb-5">
                <i class="bi-envelope fs-2 mb-3 text-muted"></i>
                <div>Email: nazhminajib7@gmail.com</div>
            </div>
            <div class="col-md-4 mb-5">
                <i class="bi-geo-alt fs-2 mb-3 text-muted"></i>
                <div>Address: Candiwinangun, Sardonoharjo, Ngaglik, Sleman</div>
            </div>
        </div>
    </div>
</section>


        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2024 - Nazhmi Najib</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
