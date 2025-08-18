@extends('layouts.app')

@section('title', 'Beranda | Layanan')

@section('content')
    {{-- Hero Section --}}
    <section class="bg-dark text-white py-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">
                Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Aceh
            </h1>
            <p class="lead mb-4">
                Mewujudkan pelayanan perizinan yang <strong>cepat</strong>, 
                <strong>transparan</strong>, dan <strong>akuntabel</strong>.
            </p>
            <a href="{{ route('login') }}" class="btn btn-warning btn-lg rounded-pill">
                Masuk ke Sistem
            </a>
        </div>
    </section>

    {{-- Layanan Section --}}
    <section class="bg-black text-white py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Layanan Kami</h2>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card bg-dark text-white h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title text-warning">Perizinan Usaha</h5>
                            <p class="card-text">Proses cepat dan mudah untuk mendapatkan izin usaha resmi di Aceh.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card bg-dark text-white h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title text-warning">Pelayanan Investasi</h5>
                            <p class="card-text">Dukungan penuh bagi investor dalam menanamkan modal di Aceh.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card bg-dark text-white h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title text-warning">Konsultasi & Informasi</h5>
                            <p class="card-text">Layanan konsultasi terkait regulasi dan prosedur perizinan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tentang Section --}}
    <section class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://dpmptsp.acehprov.go.id/assets/img/gedung.jpg" 
                         class="img-fluid rounded shadow" alt="Gedung DPMPTSP Aceh">
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold mb-3">Tentang Kami</h2>
                    <p class="mb-3">
                        Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP) Aceh merupakan instansi pemerintah 
                        yang bertugas memberikan pelayanan perizinan secara terintegrasi, cepat, transparan, dan akuntabel.
                    </p>
                    <p>
                        Kami berkomitmen untuk mendukung pertumbuhan investasi dan memberikan kemudahan akses pelayanan 
                        perizinan bagi masyarakat dan pelaku usaha di Aceh.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- {{-- Footer --}}
    <footer class="bg-black text-white text-center py-3">
        <p class="mb-0">&copy; {{ date('Y') }} DPMPTSP Aceh. All rights reserved.</p>
    </footer> -->
@endsection
