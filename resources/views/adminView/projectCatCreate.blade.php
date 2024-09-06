@extends('layout.mainAdmin')

@section('content')

<div class="pagetitle">
    <h1>Tambah Foto</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item">Media</li>
            <li class="breadcrumb-item"><a href="/dashboard/project">Project</a></li>
            <li class="breadcrumb-item active">Tambah Kategori Foto</li>
        </ol>
    </nav>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/project-kategori">
        @csrf
        <div class="mb-3 col-md-6">
            <label for="project_kategori" class="form-label">Kategori Foto</label>
            <input type="text" class="form-control @error('project_kategori') is-invalid @enderror" name="project_kategori" id="galeri_kategori" value="{{old('project_kategori')}}" autofocus>
            @error('project_kategori')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah kategori</button>
    </form>
</div>

@endsection
