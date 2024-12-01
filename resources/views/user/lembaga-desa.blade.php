@extends('layouts.layout')
@section('child')
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-banner">Lembaga Kecamatan</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Lembaga Desa -->
    <section id="lembaga-desa" class="py-5">
        <div class="container transition-container">
            <div class="row text-center mb-4">
                <h2 class="fw-bold">Lembaga Kecamatan</h2>
                <p class="text-muted">Berkenalan dengan lembaga desa yang mendukung kemajuan Kecamatan Pemangkat.</p>
            </div>
            <div class="row">
                @foreach ($lembagadesas as $lembaga)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="lembaga-card shadow-sm rounded h-100">
                            <div class="lembaga-img-container position-relative overflow-hidden rounded-top">
                                <!-- Display image if available -->
                                <img src="{{ asset('storage/' . $lembaga->gambar_lembaga) }}"
                                    alt="Foto {{ $lembaga->nama_lembaga }}" class="lembaga-img img-fluid w-100"
                                    style="height: 250px; object-fit: cover; object-position: center;"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <!-- Fallback icon if the image is missing -->
                                <i class="fas fa-building lembaga-icon position-absolute top-50 start-50 translate-middle text-white"
                                    style="display:none; font-size: 3rem;"></i>
                            </div>
                            <div class="lembaga-info p-3 bg-light rounded-bottom">
                                <h5 class="lembaga-name mb-2">{{ $lembaga->nama_lembaga }}</h5>
                                <p class="lembaga-alamat text-muted">{{ $lembaga->alamat_lembaga }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of Lembaga Desa -->
@endsection
