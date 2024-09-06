<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> {{ $tittle }} - Admin Primatech </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/fav-icon.png" rel="website icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('TemplateAdmin')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('TemplateAdmin')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('TemplateAdmin')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('TemplateAdmin')}}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{asset('TemplateAdmin')}}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{asset('TemplateAdmin')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{asset('TemplateAdmin')}}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('TemplateAdmin')}}/assets/css/style.css" rel="stylesheet">

    <!-- trix -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Template') }}/css/trix.css">
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body class="admin-body">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between mr-4">
            <i class="bi bi-list toggle-sidebar-btn"></i>
            <a href="#" class="logo d-flex align-items-center ml-4">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">IQ Primatech</span>
            </a>
        </div>


        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/fav-icon.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">PRIMATECH</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <img src="assets/img/fav-icon.png" alt="Profile" class="rounded-circle">
                            <h6>Primatech</h6>
                            @if(auth()->user()->role == '1')
                            <span>Adminstrator</span>
                            @elseif(auth()->user()->role == '2')
                            <span>Social Media Admin</span>
                            @else
                            <span>Recruiter</span>
                            @endif
                        </li>


                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item d-flex align-items-center">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </button>
                            </form>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>

    </header>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link {{ ($tittle === "Dashboard") ? '' : 'collapsed'}}" href="/admin">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($tittle === "Member") ? '' : 'collapsed'}}" href="/dashboard/member">
                    <i class="bi bi-people-fill"></i>
                    <span>Kelola Member</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($tittle === "Kelola User") ? '' : 'collapsed'}}" href="/dashboard/user">
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Kelola User</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav1" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Media</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard/yt">
                            <i class="bi bi-circle"></i><span>YouTube Link Videos</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/galeri">
                            <i class="bi bi-circle"></i><span>Kelola Galeri</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/partnership">
                            <i class="bi bi-circle"></i><span>Partnership</span>
                        </a>
                    </li>
                    <li>
                        <a href="/blog">
                            <i class="bi bi-circle"></i><span>Blog</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($tittle === "Lowongan") ? '' : 'collapsed'}}" href="/dashboard/project">
                    <i class="bi bi-archive-fill"></i>
                    <span>Kelola Project</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($tittle === "E-Library") ? '' : 'collapsed'}}" href="/dashboard/e-library">
                    <i class="bi bi-book"></i>
                    <span>E-Library</span>
                </a>
            </li>
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        @yield('content')

    </main>


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>PRIMATECH</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

    <!-- Vendor JS Files -->
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/chart.js/chart.min.js"></script>
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/quill/quill.min.js"></script>
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('TemplateAdmin')}}/assets/js/main.js"></script>

    <!-- trix -->
    <script type="text/javascript" src="{{ asset('Template') }}/js/trix.js"></script>

</body>

</html>
