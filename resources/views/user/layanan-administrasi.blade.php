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
    {{-- <section id="informasi-layanan" class="py-5">
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
    </section> --}}
    <!-- End of Informasi Layanan -->

    <section id="informasi-layanan" class="py-5" style="margin-top:5px">
        <div class="container transition-container">
            <h2 class="subjudul text-center fw-bold text-dark">Informasi Layanan</h2>
            <hr class=" mb-5 " style="width: 200px; margin: 0 auto; border: 2px solid black; opacity: 1; margin-top:10px">
                {{-- <hr style="width: 150px; margin: 0 auto; border: 2px solid black; opacity: 1; margin-top:10px"> --}}
            {{-- <div class="row text-center mb-5">
                
            </div> --}}
            <div class="row g-4">
                @php
                    $layananStatis = [
                        [
                            'nama_layanan' => 'Surat Keterangan Domisili',
                            'deskripsi' => 'Surat yang menerangkan tempat tinggal seseorang di wilayah tertentu.',
                            'persyaratan' => ['Fotokopi KTP', 'Fotokopi KK'],
                            'icon' => 'fas fa-home',
                        ],
                        [
                            'nama_layanan' => 'Surat Keterangan Usaha',
                            'deskripsi' => 'Dokumen resmi untuk keperluan pendirian atau operasional usaha.',
                            'persyaratan' => ['Fotokopi KTP', 'Surat Pengantar RT/RW'],
                            'icon' => 'fas fa-briefcase',
                        ],
                        [
                            'nama_layanan' => 'Surat Keterangan Tidak Mampu',
                            'deskripsi' => 'Surat yang menerangkan kondisi ekonomi pada seseorang.',
                            'persyaratan' => ['Fotokopi KTP', 'Fotokopi KK', 'Surat Pengantar RT/RW'],
                            'icon' => 'fas fa-file-alt',
                        ],
                        [
                            'nama_layanan' => 'Surat Keterangan Kelahiran',
                            'deskripsi' => 'Surat resmi untuk keperluan administrasi kelahiran anak.',
                            'persyaratan' => [
                                'Fotokopi KTP Orang Tua',
                                'Fotokopi KK',
                                'Surat Keterangan dari Bidan/Dokter',
                            ],
                            'icon' => 'fas fa-baby',
                        ],
                        [
                            'nama_layanan' => 'Surat Keterangan Kematian',
                            'deskripsi' => 'Dokumen untuk melaporkan dan mengesahkan kematian seseorang.',
                            'persyaratan' => [
                                'Fotokopi KTP Almarhum/Almarhumah',
                                'Fotokopi KK',
                                'Surat Keterangan Dokter atau RT/RW',
                            ],
                            'icon' => 'fa-solid fa-envelope',
                        ],
                        [
                            'nama_layanan' => 'Surat Izin Keramaian',
                            'deskripsi' => 'Dokumen izin untuk penyelenggaraan acara yang melibatkan orang banyak.',
                            'persyaratan' => ['Fotokopi KTP Pemohon', 'Surat Pengantar RT/RW', 'Rencana Acara'],
                            'icon' => 'fas fa-users',
                        ],
                    ];
                @endphp

                @foreach ($layananStatis as $index => $item)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow-sm border-0 rounded-lg h-100">
                            <div class="card-body text-center">
                                <!-- Service Icon -->
                                <div class="mb-3">
                                    <i class="{{ $item['icon'] }} fa-3x" style="color:"></i>
                                </div>
                                <!-- Service Title -->
                                <h5 class="card-title fw-bold">{{ $item['nama_layanan'] }}</h5>
                                <!-- Service Description -->
                                <p class="card-text text-muted mb-3">{{ $item['deskripsi'] }}</p>
                                <!-- Accordion for Requirements -->
                                <div class="accordion" id="accordionLayanan{{ $index }}">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $index }}">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                                aria-expanded="false" aria-controls="collapse{{ $index }}">
                                                Persyaratan
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $index }}" class="accordion-collapse collapse"
                                            aria-labelledby="heading{{ $index }}"
                                            data-bs-parent="#accordionLayanan{{ $index }}">
                                            <div class="accordion-body text-start">
                                                <ul class="mb-0">
                                                    @foreach ($item['persyaratan'] as $syarat)
                                                        <li>{{ $syarat }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Accordion -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
