@extends('layout.main')

@section('content')

@php
$bg = asset('Template');
@endphp

<main>
    <div class="logo-beranda">
        <img src="{{ asset('images/PRIMATECH/logohitam.png') }}" alt="Logo IQ Primatech" />
        <h1 class="teks">IQ PRIMATECH</h1>
        <h3 class="quote">Dinamis Seperti Energi, Berpacu Pada Teknologi</h3>
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="whitesmoke" />
                </g>
            </svg>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="judul">TENTANG INFORMATIC QUALITY PRIME TECHNOLOGY</h2>
        <p class="maincontent">
            IQ PRIMATECH merupakan rangkaian komunitas dengan target tingkat
            nasional yang diselenggarakan oleh Unit Kegiatan Mahasiswa Universitas
            Islam Riau Prodi Teknik Informatika. Untuk tahun 2023, akan diadakan
            sayembara project, webinar, serta mencari bibit unggul pada potensi
            yang bertujuan untuk mengajak pelajar, mahasiswa, dan masyarakat umum
            untuk aktif berpartisipasi didunia teknologi yang perkembangannya
            setiap tahun semakin canggih dan modern. Dengan terbitnya website ini,
            akan diselenggarakannya program-program kami dengan tema : <br /><span>"Dinamis Seperti Energi, Berpacu Pada
                Teknologi"</span>
        </p>
        <div class="first">
            <img src="{{ asset('images/PRIMATECH/IMG_6716.PNG') }}" alt="IQ PRIMATECH" />
        </div>
    </div>

    <div class="vm container">
        <div class="row mt text-center">
            <div class="section-title-container col-12">
                <h2 class="judulvm">Informatics Engineer</h2>
                <h3 class="section-title">Big and Bigger</h3>
            </div>
        </div>
        <div class="tegar">
            <img src="{{ asset('images/PRIMATECH/tegaratas.svg') }}" alt="Tegar Raihan Akmali" />
            <p>
                "This is a learning forum about technology, especially in
                informatics engineering. We also share information to meet the
                knowledge needs of people who intend to learn." - Tegar
            </p>
        </div>
        <div class="hanif">
            <img src="{{ asset('images/PRIMATECH/hanatas.svg') }}" alt="Nurfauzan Hanif" />
            <p>
                "Visi IQ PRIMATECH adalah memfasilitasi pertukaran informasi mengenai perkembangan dan
                penerapan teknologi modern dengan memberikan kesempatan dan relasi
                kepada mahasiswa dan masyarakat umum." <br>- Hanif
            </p>
        </div>
    </div>
</main>


<section class="call-to-action no-padding support d-flex align-items-center">
    <div class="container">
        <div class="action-style-box">
            <div class="row mt">
                <div class="col-md-8 text-center text-md-left mb-4">
                    <div class="call-to-action-text">
                        <h3 class="action-title">Support Each Other</h3>
                    </div>
                </div><!-- Col end -->
                <div class="col-md-4 text-center text-md-right mt-3">
                    <div class="call-to-action-btn">
                        <a class="btn btn-light rounded text-dark" href="/tentang">Tentang Kami</a>
                    </div>
                </div><!-- col end -->
            </div><!-- row end -->
        </div><!-- Action style box -->
    </div><!-- Container end -->
</section><!-- Action end -->

<section class="social" id="social">
    <div class="row mt text-center">
        <div class="section-container col-12">
            <h2 class="section-title">IQ PRIMATECH</h2>
            <h3 class="judulvm">Aktivitas Terbaru</h3>
        </div>
    </div>
    <div class="container-social row mt ml-3 mr-3">
        @foreach ($links as $link)
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="960" height="540" src="{{ $link->embed_link }}"
                    title="YouTube video" frameborder="0" allow="autoplay" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6 yt">
            <div class="card mb-3" style="max-width: 960px;">
                <div class="row mt g-0">
                    <div class="img-social col-md-4">
                        <img src="{{ asset('images/PRIMATECH/prima-yt.png') }}"
                            class="img-fluid rounded-start mx-2 my-2">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">{{ $link->title }}</h4>
                            <p class="card-text">IQ PRIMATECH | Jl. Kaharuddin Nst No.113,
                                Simpang Tiga,
                                Kec. Bukit Raya,
                                Kota Pekanbaru,
                                Riau 28284</p>
                            <div class="g-ytsubscribe" data-channelid="UCyM6kQmbMWqKK3QTDMHeoZw"
                                data-layout="default" data-count="default"></div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="https://www.youtube.com/@iqprimatech/featured" class="btn btn-dark btn-more">More Video</a>
        </div>
        @endforeach
    </div>
</section>


<section class="content">
    <div class="container">
        <div class="row mt text-center">
            <div class="section-title-container-bawah col-lg-12">
                <h2 class="section-title">IQ PRIMATECH</h2>
                <h3 class="judulvm">Partner kami</h3>
            </div>
        </div>
        <div class="logos">
            <div class="logo_items">
                    <img src="images/PRIMATECH/orang-siber.png">
                    <img src="images/PRIMATECH/aklamasi.png">
                    <img src="images/PRIMATECH/orang-siber.png">
                    <img src="images/PRIMATECH/aklamasi.png">
                    <img src="images/PRIMATECH/orang-siber.png">
                    <img src="images/PRIMATECH/aklamasi.png">
                    <img src="images/PRIMATECH/orang-siber.png">
                    <img src="images/PRIMATECH/aklamasi.png">
            </div>
                <div class="logo_items">
                    <img src="images/PRIMATECH/orang-siber.png">
                    <img src="images/PRIMATECH/aklamasi.png">
                    <img src="images/PRIMATECH/orang-siber.png">
                    <img src="images/PRIMATECH/aklamasi.png">
                    <img src="images/PRIMATECH/orang-siber.png">
                    <img src="images/PRIMATECH/aklamasi.png">
                    <img src="images/PRIMATECH/orang-siber.png">
                    <img src="images/PRIMATECH/aklamasi.png">
                </div>
        </div>

        <div class="col-12">
            <div class="general-btn text-center">
                <a class="btn-selengkapnya btn-dark" href="/partnership">Selengkapnya</a>
            </div>
        </div>
    </div>
    <!--/ Container end -->
</section>
<!-- Content end -->

@endsection
