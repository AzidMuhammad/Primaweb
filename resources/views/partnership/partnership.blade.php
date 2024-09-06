@extends('layout.main')

@section('content')

<section id="project-area" class="project-area">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">IQ PRIMATECH</h2>
                <h3 class="section-sub-title">Our Partnership</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row all-clients">
                    @foreach($partnership as $partner)
                    <div class="col-sm-2 col-6">
                        <figure class="clients-logo">
                            <a href="#"><img src="{{ asset('images/partner-image/' . $partner->image) }}"
                                    class="img-fluid" width="100" title="{{ $partner->nama_partner }}"></a>
                        </figure>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
