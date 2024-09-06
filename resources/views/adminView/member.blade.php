@extends('layout.mainAdmin')

@section('content')
<div class="pagetitle">
    <h1>Data Member</h1>

    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Member</li>
        </ol>
    </nav>

    <div class="col-md-6">
        <h5 class="widget-title">Cari Member</h5>
        <form action="/dashboard/member">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search"
                    value="{{ request('search') }}" autofocus>
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>

    <div class="col">
        <a href="/dashboard/member/create" class="btn btn-primary text-white">Tambah Data <i
                class="bi bi-arrow-right-short"></i></a>
    </div>

    @if (session()->has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>
<!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">No Hp</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Posisi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                <tr class="align-middle">
                                    <td><img src="{{ asset('images/member-image/' . $member->image) }}" alt=""
                                            width="100"></td>
                                    <td>{{ $member->nama }}</td>
                                    <td>{{ $member->jenis_kelamin }}</td>
                                    <td>{{ $member->no_hp }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>{{ $member->posisi }}</td>
                                    <td>
                                        <a href="/dashboard/member/{{ $member->slug }}" class="btn btn-primary"
                                            title="Detail"><i class="bi bi-eye"></i></a>
                                        <a href="/dashboard/member/{{ $member->slug }}/edit" class="btn btn-warning"
                                            title="Edit"><i class="bi bi-pencil-square"></i></a>

                                        <form action="/dashboard/member/{{ $member->slug }}" method="POST"
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
                            {{ $members->links() }}
                        </div>
                    </div>
                    <!-- End Default Table Example -->
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
