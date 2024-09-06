@extends('layout.mainAdmin')

@section('content')
<div class="container dashboard">
    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div>

    <!-- Postingan saat ini -->
    <div class="col-md-6">
        <form action="/dashboard/blog" class="form-group">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Temukan Artikel..." name="search"
                    value="{{ request('search') }}" autofocus>
            </div>
            <button class="btn btn-primary form-btn" type="submit">Search</button>
        </form>
    </div>
    <div class="col mb-3">
        <a href="/blog" class="btn btn-primary text-white">Tambah Postingan Baru <i
                class="bi bi-arrow-right-short"></i></a>
    </div>

    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body-db">
                        <h5 class="card-title">Postingan Terbaru</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="col-4">Judul Post</th>
                                        <th scope="col">Kategori Post</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Tanggal Publikasi</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->category->kategori }}</td>
                                        <td>{{ $post->user->nama }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>
                                            <a href="/dashboard/blog/{{ $post->slug }}" class="btn btn-primary"
                                                title="Detail"><i class="bi bi-eye"></i></a>
                                            <a href="/dashboard/blog/{{ $post->slug }}/edit"
                                                class="btn btn-warning" title="Edit"><i
                                                    class="bi bi-pencil-square"></i></a>

                                            <form action="/dashboard/blog/{{ $post->slug }}" method="POST"
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
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- data member -->
    <div class="pagetitle">
        <h1>Data Member</h1>
    </div>
    <div class="row">
        @foreach ($members as $member)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/member-image/' . $member->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $member->nama }}</h5>

                    <a href="/dashboard/member/{{ $member->slug }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
        <div class="d-flex justify-content-start">
            {{ $members->links() }}
        </div>
    </div>


</div>
@endsection
