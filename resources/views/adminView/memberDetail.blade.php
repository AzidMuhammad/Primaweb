@extends('layout.mainAdmin')

@section('content')

<div class="pagetitle">
    <h1>Tambah Post</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/member">Data Member</a></li>
            <li class="breadcrumb-item active">Detail Member</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row align-items-top">
        <div class="col">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/member-image/'.$member->image) }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $member->nama }}</h5>

                            @if($member->jenis_kelamin == 'Laki-Laki')
                            <p class="card-text">Jenis Kelamin : <strong>Laki-Laki</strong></p>
                            @else
                            <p class="card-text">Jenis Kelamin : <strong>Perempuan</strong></p>
                            @endif

                            <p class="card-text">Tanggal Lahir : <strong>{{ $member->tanggal_lahir }}</strong></p>
                            <p class="card-text">Alamat Domisili : <strong>{{ $member->alamat_domisili }}</strong></p>
                            <p class="card-text">Telepon : <strong>{{ $member->no_hp }}</strong></p>
                            <p class="card-text">E-mail : <strong>{{ $member->email }}</strong></p>
                            <p class="card-text">Posisi : <strong>{{ $member->posisi }}</strong></p>

                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Riwayat Dokter</h5>
                    {!! $member->riwayat !!}
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
