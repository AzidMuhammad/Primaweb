@extends('layout.main')

@section('content')

<section id="project-area" class="project-area">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">IQ PRIMATECH</h2>
                <h3 class="section-sub-title">Project</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <!-- galeri -->
        <div class="row">

            <div class="col-md-6">
                <h4 class="widget-title">Filter Project</h4>
                <form action="/project">
                    <div class="input-group mb-3">
                        <select name="search" class="form-control">
                            @foreach($kategories as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->project_kategori }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <div class="row shuffle-wrapper">
                    <div class="col-1 shuffle-sizer"></div>
                    @foreach($projects as $project)

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;Poliklinik&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('images/project-image/'.$project->image) }}" aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('images/project-image/'.$project->image) }}" alt="project-img" style="max-height:350px ; overflow:hidden;">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <p class="project-item-title text-white">{{ $project->title_project }}</a>
                                    </p>
                                    <span class="text-white"><small>{!! $project->keterangan !!}</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div><!-- shuffle end -->
            </div>

        </div><!-- Content row end -->
        <div class="d-flex justify-content-center mt-4">
            {{$projects->links()}}
        </div>
    </div>
    <!--/ Container end -->
</section><!-- Project area end -->

@endsection
