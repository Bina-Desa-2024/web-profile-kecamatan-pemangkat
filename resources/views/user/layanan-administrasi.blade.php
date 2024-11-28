@extends('layouts.layout')
@section('child')
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-banner">Layanan Administrasi</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Informasi Layanan -->
    <section id="informasi-layanan" class="py-5">
        <div class="container transition-container">
            <div class="row text-center mb-5">
                <h2 class="fw-bold">Informasi Layanan</h2>
                <p class="text-muted">Pelayanan administrasi yang tersedia di Kecamatan Pemangkat.</p>
            </div>
            <div class="row g-4">
                @foreach ($layananadministrasis as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow-sm border-0 rounded-lg h-100">
                            <div class="card-body text-center">
                                <!-- Service Title -->
                                <h5 class="card-title fw-bold">{{ $item->nama_layanan }}</h5>
                                <!-- Service Description -->
                                <p class="card-text text-muted mb-3">{{ $item->deskripsi }}</p>
                                <!-- Service Requirements -->
                                <p class="card-text text-muted small">{!! $item->persyaratan !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of Informasi Layanan -->
@endsection
