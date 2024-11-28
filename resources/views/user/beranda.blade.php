@extends('layouts.layout')

@section('child')
    <!-- Banner -->
    <section id="banner-beranda">
        <div class="container-fluid banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h2 class="text-banner-h2">Selamat Datang</h2>
                    <h2 class="text-banner-h1">Website Kecematan Pemangkat</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Content Section -->
    <section id="content" class="py-5 mt-5">
        <div class="container-fluid col-lg-10 shadow p-5 rounded bg-white">
            <h2 class="subjudul text-center fw-bold text-dark">Tentang Kecamatan Pemangkat</h2>
            <hr class=" mb-5 " style="width: 200px; margin: 0 auto; border: 2px solid black; opacity: 1; margin-top:10px">
            <div class="row g-5">
                <!-- Image Content -->
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="position-relative overflow-hidden rounded shadow-lg" style="width: 100%; max-width: 500px;">
                        <img src="{{ asset('storage/' . $profiledesa->gambar_profiledesa) }}" class="img-fluid rounded"
                            alt="Desa Pemangkat Kota"
                            style="object-fit: cover; width: 100%; height: 100%; transition: transform 0.3s;">
                    </div>
                </div>

                <!-- Text Content -->
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <p class="text-muted fs-5" style="line-height: 1.8; text-align: justify;">
                        {!! \Illuminate\Support\Str::limit($profiledesa->sejarah_desa, 600) !!}
                    </p>
                    <div class="text-center text-lg-start mt-4">
                        <a href="/profile-desa" 
                            class="btn px-3 py-2 shadow-sm fw-bold"
                            style="background-color: #F2BF18; color: white; font-size: 1rem; border-radius: 0.5rem; transition: background-color 0.3s ease, transform 0.2s;">
                            <i class="fas fa-info-circle me-2"></i> Selengkapnya
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End of Content Section -->

    <div class="py-5"></div>

    <section id="informasi-layanan" class="py-5" style="margin-top:5px">
        <div class="container transition-container">
            <div class="row text-center mb-5">
                <h2 class="fw-bold">Informasi Layanan</h2>
                <hr style="width: 150px; margin: 0 auto; border: 2px solid black; opacity: 1; margin-top:10px">
            </div>
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

    <div class="py-5"></div>

    <!-- Video Profile Section -->
    <section id="video-profile" class="py-5">
        <div class="container-fluid transition-container col-lg-10 shadow-sm p-4 rounded">
            <h2 class="subjudul text-center fw-bold">Video Profile Desa</h2>
            <hr class=" mb-4" style="width: 150px; margin: 0 auto; border: 2px solid black; opacity: 1; margin-top:10px">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="ratio ratio-16x9 shadow-sm rounded">
                        <iframe class="rounded" src="https://www.youtube.com/embed/qIAq6TzBxdk?si=M2q1hTPSUpVh2Ske"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Video Profile Section -->

    <div class="py-5"></div>

    <!-- Perangkat Desa Section -->
    <section id="perangkat-desa" class="py-5">
        <div class="container-fluid transition-container col-lg-10 shadow-sm p-4 rounded">
            <!-- Section Title -->
            <div class="row mb-4 justify-content-center text-center">
                <div class="col-12">
                    <h2 class="subjudul fw-bold">Perangkat Desa</h2>
                    <hr style="width: 150px; margin: 0 auto; border: 2px solid black; opacity: 1; margin-top:10px">
                </div>
            </div>

            <!-- Carousel -->
            <div id="carouselPerangkatDesa" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <!-- Carousel Indicators -->
                <div class="carousel-indicators">
                    @foreach ($perangkatdesas->chunk(1) as $index => $chunk)
                        <button type="button" data-bs-target="#carouselPerangkatDesa"
                            data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                            aria-current="{{ $index === 0 ? 'true' : '' }}"
                            aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>

                <!-- Carousel Content -->
                <div class="carousel-inner">
                    @foreach ($perangkatdesas->chunk(1) as $index => $chunk)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="row justify-content-center g-4">
                                @foreach ($chunk as $perangkatdesa)
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="card shadow-sm border-0 rounded h-100">
                                            <!-- Adjusted Image -->
                                            <img src="{{ asset('storage/' . $perangkatdesa->gambar_perangkatdesa) }}"
                                                alt="{{ $perangkatdesa->jabatan }}" class="card-img-top rounded-top"
                                                style="height: 350px; object-fit: cover; object-position: center;">
                                            <div class="card-body text-center">
                                                <h3 class="card-title fw-bold">{{ $perangkatdesa->nama }}</h3>
                                                <p class="card-text text-muted">{{ $perangkatdesa->jabatan }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPerangkatDesa"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselPerangkatDesa"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- "See More" Button -->
            {{-- <div class="row mt-4">
                <div class="col-lg-12 text-center">
                    <a href="/perangkat-desa" 
                    class="btn px-3 py-2 shadow-sm fw-bold"
                    style="background-color: #F2BF18; color: white; font-size: 1rem; border-radius: 0.5rem; transition: background-color 0.3s ease, transform 0.2s;">
                    <i class="fas fa-info-circle me-2"></i>
                        Selengkapnya
                    </a>
                </div>
            </div> --}}
    </section>
    <!-- End of Perangkat Desa Section -->

    <div class="py-5"></div>

    <!-- Pengumuman -->
    <section id="pengumuman" class="py-5 bg-white">
        <div class="container transition-container mb-3">
            <h2 class="subjudul text-center fw-bold">Pengumuman</h2>
            <hr class=" mb-5" style="width: 150px; margin: 0 auto; border: 2px solid black; opacity: 1; margin-top:10px">
            <div class="row g-4 justify-content-center">
                @foreach ($pengumumen as $pengumuman)
                    <div class="col-lg-4 col-md-6">
                        <!-- Card Klikable -->
                        <a href="/detail-pengumuman/{{ $pengumuman->id }}" class="text-decoration-none">
                            <div class="card shadow-sm border-0 h-100">
                                <!-- Gambar -->
                                <img src="{{ asset('storage/' . $pengumuman->gambar_pengumuman) }}"
                                    style="height: 200px; object-fit: cover; object-position: center;"
                                    class="card-img-top rounded-top">
                                <!-- Konten -->
                                <div class="card-body d-flex flex-column p-3">
                                    <div class="d-flex justify-content-between text-muted mb-2"
                                        style="font-size: 0.8rem;">
                                        <!-- Ikon Tanggal -->
                                        <span>
                                            <i class="fas fa-calendar-alt" style="margin-right: 8px;"></i>
                                            {{ \Carbon\Carbon::parse($pengumuman->created_at)->format('j F Y') }}
                                        </span>
                                        <!-- Ikon Penulis -->
                                        <span>
                                            <i class="fas fa-user" style="margin-right: 8px;"></i>
                                            {{ $pengumuman->penulis ?? 'Admin' }}
                                        </span>
                                    </div>
                                    <!-- Judul -->
                                    <h5 class="card-title fw-bold text-dark mb-1" style="margin-top:3px;">
                                        {{ $pengumuman->judul }}
                                    </h5>
                                    <!-- Deskripsi Singkat -->
                                    <p class="card-text text-muted small">
                                        {!! \Illuminate\Support\Str::limit($pengumuman->deskripsi_singkat, 100) !!}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="py-5"></div>

    <section id="kegiatan" class="py-5">
        <div class="container transition-container">
            <div class="row text-center mb-5">
                <h2 class="subjudul fw-bold">Galeri Kegiatan Desa</h2>
                <hr style="width: 150px; margin: 0 auto; border: 2px solid black; opacity: 1; margin-top:10px">
            </div>
            <div class="row g-4">
                @forelse ($kelolakegiatans as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card-kegiatan position-relative rounded shadow-sm overflow-hidden">
                            <!-- Image -->
                            <img class="img-fluid" src="{{ asset('storage/' . $item->gambar_kegiatan) }}"
                                alt="{{ $item->nama_kegiatan }}">
                            <!-- Overlay -->
                            <div
                                class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100 d-flex justify-content-center align-items-center p-3">
                                <h5 class="text-white fw-bold text-center">{{ $item->nama_kegiatan }}</h5>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">Belum ada kegiatan yang tersedia.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- End of Pengumuman -->

    <section class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Website Desa</h2>
            </div>
            <div class="row g-4">
                <!-- Desa 1 -->
                <div class="col-md-3 col-sm-6">
                    <a href="/desa1" class="text-decoration-none">
                        <div class="card text-center shadow-sm h-100">
                            <div class="card-body">
                                <img src="logo-desa1.png" alt="Logo Desa 1" class="img-fluid mb-3" style="max-height: 100px;">
                                <h5 class="card-title text-dark fw-bold">Desa 1</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Desa 2 -->
                <div class="col-md-3 col-sm-6">
                    <a href="/desa2" class="text-decoration-none">
                        <div class="card text-center shadow-sm h-100">
                            <div class="card-body">
                                <img src="logo-desa2.png" alt="Logo Desa 2" class="img-fluid mb-3" style="max-height: 100px;">
                                <h5 class="card-title text-dark fw-bold">Desa 2</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Desa 3 -->
                <div class="col-md-3 col-sm-6">
                    <a href="/desa3" class="text-decoration-none">
                        <div class="card text-center shadow-sm h-100">
                            <div class="card-body">
                                <img src="logo-desa3.png" alt="Logo Desa 3" class="img-fluid mb-3" style="max-height: 100px;">
                                <h5 class="card-title text-dark fw-bold">Desa 3</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Desa 4 -->
                <div class="col-md-3 col-sm-6">
                    <a href="/desa4" class="text-decoration-none">
                        <div class="card text-center shadow-sm h-100">
                            <div class="card-body">
                                <img src="logo-desa4.png" alt="Logo Desa 4" class="img-fluid mb-3" style="max-height: 100px;">
                                <h5 class="card-title text-dark fw-bold">Desa 4</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Desa 5 -->
                <div class="col-md-3 col-sm-6">
                    <a href="/desa5" class="text-decoration-none">
                        <div class="card text-center shadow-sm h-100">
                            <div class="card-body">
                                <img src="logo-desa5.png" alt="Logo Desa 5" class="img-fluid mb-3" style="max-height: 100px;">
                                <h5 class="card-title text-dark fw-bold">Desa 5</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Desa 6 -->
                <div class="col-md-3 col-sm-6">
                    <a href="/desa6" class="text-decoration-none">
                        <div class="card text-center shadow-sm h-100">
                            <div class="card-body">
                                <img src="logo-desa6.png" alt="Logo Desa 6" class="img-fluid mb-3" style="max-height: 100px;">
                                <h5 class="card-title text-dark fw-bold">Desa 6</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Desa 7 -->
                <div class="col-md-3 col-sm-6">
                    <a href="/desa7" class="text-decoration-none">
                        <div class="card text-center shadow-sm h-100">
                            <div class="card-body">
                                <img src="logo-desa7.png" alt="Logo Desa 7" class="img-fluid mb-3" style="max-height: 100px;">
                                <h5 class="card-title text-dark fw-bold">Desa 7</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Desa 8 -->
                <div class="col-md-3 col-sm-6">
                    <a href="/desa8" class="text-decoration-none">
                        <div class="card text-center shadow-sm h-100">
                            <div class="card-body">
                                <img src="logo-desa8.png" alt="Logo Desa 8" class="img-fluid mb-3" style="max-height: 100px;">
                                <h5 class="card-title text-dark fw-bold">Desa 8</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
@endsection
