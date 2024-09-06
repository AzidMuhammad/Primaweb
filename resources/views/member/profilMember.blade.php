@extends('layout.main')

@section('content')

<section id="project-area" class="project-area">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">IQ PRIMATECH</h2>
                <h3 class="section-sub-title">MEMBERS</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div id="team-slide" class="team-slide">
                    @foreach ($datas as $dokter)
                    <div class="item">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/member-image/' . $dokter->image) }}" alt="team-img">
                            </div>
                            <div class="ts-team-content">
                                <p class="text-white"> <Strong>{{ $dokter->nama }}</Strong></p>

                                <div class="team-social-icons">
                                    <a class="btn btn-primary" href="/member/profil/{{ $dokter->slug }}"><small
                                            class="text-small">Lihat Detail</small> <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
