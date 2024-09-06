@extends('layout.main')

@section('content')

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="column-title">Tentang Kami</h3>
                <div class="row">
                    <div class="col">
                        <h5 class="">VISI</h5>
                        <p><i>Menciptakan mahasiswa Teknik Informatika yang berkompeten dalam ilmu pengetahuan, khususnya dalam bidang programming.</i></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <h5 class="">MISI</h5>
                        <ol>
                            <li>Membentuk komunitas programming yang bersinergi</li>
                            <li>Memperdalam programming secara ekstrakulikuler</li>
                            <li>Mengembangkan metode dan teknik dalam belajar programming</li>
                        </ol>
                    </div>
                </div>

            </div>

            <div class="tentang col-lg-6 mt-5 mt-lg-0">

                <iframe width="560" height="315" src="https://www.youtube.com/embed/SSIt7b4hCeo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" class="yt-tentang" allowfullscreen></iframe>
            </div>

            <div class="col mt-4">
                <h3 class="column-title">Sejarah Singkat</h3>
                <div class="row">
                    <div class="col">
                        <p style="text-align: justify; text-indent: 30px; margin-top: -20px;" class="sejarah">IQ PRIMATECH merupakan rangkaian komunitas dengan target tingkat nasional yang diselenggarakan oleh Unit Kegiatan Mahasiswa Universitas Islam Riau Prodi Teknik Informatika. Untuk tahun 2023, akan diadakan sayembara project, webinar, serta mencari bibit unggul pada potensi yang bertujuan untuk mengajak pelajar, mahasiswa, dan masyarakat umum untuk aktif berpartisipasi didunia teknologi yang perkembangannya setiap tahun semakin canggih dan modern. Dengan terbitnya website ini, akan diselenggarakannya program-program kami dengan tema : <b>"Dinamis sepeti energi, berpacu pada teknologi"</b> </p>
                    </div>
                </div>
            </div>
        </div><!-- Content row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->

@endsection
