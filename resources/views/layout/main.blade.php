<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>IQ PRIMATECH</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name=author content="Themefisher">
    <meta name=generator content="Themefisher Constra HTML Template v1.0">

    <!-- Favicon
================================================== -->
    <link href="assets/img/fav-icon.png" rel="website icon">

    <!-- CSS
================================================== -->
    <!-- Beranda -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/colorbox/colorbox.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('Template') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('Template') }}/css/beranda.css">
    <!-- wa floating btn-->
    <link rel="stylesheet" href="{{ asset('Template') }}/css/wabtn.css">

</head>

<body>
    <div class="body-inner">
        <!-- Header start -->
        <header id="header" class="header-two">
            <div class="site-navigation">
                <div class="row mr-4 ml-4">

                    <div class="col-lg-12">
                        <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light p-0">

                            <div class="logo">
                                <a class="d-block ml-4" href="/">
                                    <img loading="lazy" src="assets/img/primatechwhite.png" alt="PRIMATECH">
                                </a>
                            </div><!-- logo end -->

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div id="navbar-collapse" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav ml-auto align-items-center">

                                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>

                                    <li class="nav-item"><a class="nav-link nb" href="/tentang">Tentang kami</a></li>

                                    <li class="nav-item"><a class="nav-link nb" href="/artikel">Artikel</a></li>

                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle nb"
                                            data-toggle="dropdown">Informasi
                                            <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dr" href="/member/profil">Members</a></li>
                                            <li><a class="dr" href="/galeri">Galeri</a></li>
                                            <li><a class="dr" href="/project">Project</a></li>
                                            <li><a class="dr" href="/partnership">Our Partners</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item"><a class="nav-link nb mr-4" href="/e-library">Library</a></li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!--/ Col end -->
                </div>
                <!--/ Row end -->
                <!--/ Container end -->

            </div>
            <!--/ Navigation end -->
        </header>
        <!--/ Header end -->

        @yield('content')

        <footer id="footer" class="footer">
            <div class="footer-main">
                <div class="container container-footer">
                    <div class="row mt justify-content-between">
                        <div class="col-lg-4 col-md-6 footer-widget footer-about">
                            <h3 class="widget-title mb-5">Tentang Kami</h3>
                            <div class="footer-logo d-flex justify-content-center">
                                <img loading="lazy" width="300px" class=""
                                    src="{{ asset('images') }}/PRIMATECH/footer.png" alt="Constra">
                            </div>
                            <p class="text-white mt-5">IQ PRIMATECH adalah salah satu Study Club mahasiswa Teknik
                                Informatika
                                Universitas Islam Riau yang berfokus pada bidang programming.</p>
                            <a href="/tentang" class="text-white">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                            <br>
                            <hr>
                        </div><!-- Col end -->

                        <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0 forum">
                            <h3 class="widget-title">Forum programming</h3>
                            <div class="working-hours text-white">
                                Memfasilitasi pertukaran informasi mengenai perkembangan dan penerapan teknologi
                                modern, serta memberikan kesempatan dan relasi kepada mahasiswa dan masyarakat umum.
                            </div>
                        </div><!-- Col end -->

                        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget project">
                            <p class="text-white">Temukan kami:</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/" aria-label="Facebook"><i
                                                class="fab fa-facebook-f text-white"></i></a></li>
                                    <li><a href="https://www.youtube.com/@iqprimatech" aria-label="Youtube"><i
                                                class="fab fa-youtube text-white"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/iq.primatech/" aria-label="Instagram"><i
                                                class="fab fa-instagram text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Footer main end -->

            <div class="copyright">
                <div class="container">
                    <div class="row mt align-items-center">
                        <div class="col-md-12">
                            <div class="copyright-info text-white text-center">
                                <span>Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>, IQ PRIMATECH
                                </span>
                            </div>
                        </div>
                    </div><!-- Row end -->

                </div><!-- Container end -->
            </div><!-- Copyright end -->
        </footer><!-- Footer end -->

        <!-- initialize jQuery Library -->
        <script src="{{ asset('Template') }}/plugins/jQuery/jquery.min.js"></script>
        <!-- Bootstrap jQuery -->
        <script src="{{ asset('Template') }}/plugins/bootstrap/bootstrap.min.js" defer></script>
        <!-- Slick Carousel -->
        <script src="{{ asset('Template') }}/plugins/slick/slick.min.js"></script>
        <script src="{{ asset('Template') }}/plugins/slick/slick-animation.min.js"></script>
        <!-- Color box -->
        <script src="{{ asset('Template') }}/plugins/colorbox/jquery.colorbox.js"></script>
        <!-- shuffle -->
        <script src="{{ asset('Template') }}/plugins/shuffle/shuffle.min.js" defer></script>


        <!-- Google Map API Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
        <!-- Google Map Plugin-->



        <script src="{{ asset('Template') }}/plugins/google-map/map.js" defer></script>

        <!-- Template custom -->
        <script src="{{ asset('Template') }}/js/script.js"></script>

        <script src="https://apis.google.com/js/platform.js"></script>

        <!-- Navbar Animation -->
        <script src="{{ asset('Template') }}/js/navbar.js"></script>


    </div><!-- Body inner end -->
</body>

</html>
