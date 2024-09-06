@extends('layout.mainAdmin')

@section('content')
<div class="pagetitle">
    <h1>Project</h1>

    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item">Media</li>
            <li class="breadcrumb-item active">Project</li>
        </ol>
    </nav>

    <div class="col">
        <a href="/dashboard/project/create" class="btn btn-primary text-white">Tambah Project<i
                class="bi bi-arrow-right-short"></i></a>
        <a href="/dashboard/project-kategori/create" class="btn btn-warning text-white">Tambah Kategori Project<i
                class="bi bi-arrow-right-short"></i></a>

    </div>

    @if (session()->has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Tanggal di buat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($project as $data)
                                <tr class="align-middle">
                                    <td><img src="{{ asset('images/project-image/' . $data->image) }}" alt=""
                                            width="200"></td>
                                    <td>{{ $data->kategori->project_kategori }}</td>
                                    <td>{{ $data->title_project }}</td>
                                    <td>{{ $data->created_at }}</td>
                                    <td>

                                        <!-- modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detail Gambar
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{ asset('storage/' . $data->image) }}"
                                                            class="img-fluid" alt="$data->title_galeri }}">
                                                        <p>{!! $data->keterangan !!}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- endmodal -->

                                        <form action="/dashboard/project/{{ $data->id }}" method="POST"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" title="Hapus"
                                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-start">
                            {{ $project->links() }}
                        </div>
                    </div>
                    <!-- End Default Table Example -->
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
