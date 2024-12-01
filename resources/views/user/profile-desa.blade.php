@extends('layouts.layout')
@section('child')
    <!-- Banner -->
    <section id="banner">
        <div
            class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center bg-dark text-white">
            <div class="row">
                <div class="text-center">
                    <h1 class="fw-bold display-4">Profil Kecamatan</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Content Section -->
    <section id="content" class="py-5">
        <div class="container-fluid transition-container col-lg-10 shadow-sm p-4 rounded">
            <!-- Section Title -->
            <h2 class="subjudul mb-4 text-center fw-bold">Sejarah Kecamatan</h2>
            <div class="row align-items-center flex-column">
                <!-- Image Content -->
                <div class="col-12 mb-4">
                    <div class="image-container position-relative overflow-hidden rounded shadow">
                        <img src="{{ asset('storage/' . $profiledesa->gambar_profiledesa) }}" class="img-fluid rounded"
                            alt="Desa Pemangkat Kota"
                            style="object-fit: cover; width: 100%; max-height: 400px; transition: transform 0.3s;">
                    </div>
                </div>

                <!-- Text Content -->
                <div class="col-12">
                    <p class="text-muted" style="font-size: 1.1rem; line-height: 1.8; text-align: justify;">
                        {!! \Illuminate\Support\Str::limit($profiledesa->sejarah_desa, 10000) !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Content Section -->


    <!-- Visi Misi Section -->
    <section id="visi-misi" class="py-5">
        <div class="container transition-container col-lg-10 shadow-sm p-4 rounded">
            <!-- Section Title -->
            <h2 class="subjudul text-center mb-5 fw-bold">Visi & Misi</h2>
            <div class="row g-4">
                <!-- Visi Section -->
                <div class="col-lg-6 col-md-12">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-header text-white text-center py-3 rounded-top" style="background-color: #c29912">
                            <h5 class="mb-0 fw-bold">Visi</h5>
                        </div>
                        <div class="card-body">
                            <p class="mb-0" style="font-size: 1rem; line-height: 1.6; text-align: justify; color: #555;">
                                {{ $profiledesa->visi_desa }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Misi Section -->
                <div class="col-lg-6 col-md-12">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-header text-white text-center py-3 rounded-top" style="background-color: #c29912">
                            <h5 class="mb-0 fw-bold">Misi</h5>
                        </div>
                        <div class="card-body">
                            <ul class="mb-0 ps-3"
                                style="font-size: 1rem; line-height: 1.6; list-style-type: disc; text-align: justify; color: #00;">
                                {!! $profiledesa->misi_desa !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Visi Misi Section -->

    <!-- Kependudukan Section -->
    <section id="kependudukan" class="py-5 bg-white">
        <div class="container transition-container col-lg-10 shadow-sm p-4 rounded">
            <h2 class="subjudul text-center mb-5 fw-bold">Demografis Kecamatan</h2>
            <!-- Key Statistics Section -->
            <div class="row g-4 text-center">
                <!-- Total Jiwa -->
                <div class="col-lg-6">
                    <div class="d-flex" style="border-radius:20px; padding:20px; background-color:#f1f1f1; ">
                        <div class="d-flex align-items-center justify-content-center" style=" background-color:#c29912; border-radius:100%; width:80px; height:80px; margin-right:10px;">
                            <i class="fa-solid fa-users" style="color: white; font-size:45px"></i>
                        </div>
                        <div class="d-flex flex-column justify-content-between p-1" style=" text-align: left;">
                            <span style="font-size: 30px; color:#99790e" class="fw-bold counter" data-target="{{ $profiledesa->total_jiwa }}">0</span>
                            <div style="font-size: 16px" class="fw-bold">Total Jiwa</div>
                        </div>
                    </div>
                </div>
                <!-- Total KK -->
                <div class="col-lg-6">
                    <div class="d-flex" style="border-radius:20px; padding:20px; background-color:#f1f1f1; ">
                        <div class="d-flex align-items-center justify-content-center" style=" background-color:#c29912; border-radius:100%; width:80px; height:80px; margin-right:10px;">
                            <i class="fa-solid fa-user" style="color: white; font-size:45px"></i>
                        </div>
                        <div class="d-flex flex-column justify-content-between p-1" style=" text-align: left;">
                            <span style="font-size: 30px; color:#99790e" class="fw-bold counter" data-target="{{ $profiledesa->total_kk }}">0</span>
                            <div style="font-size: 16px" class="fw-bold">Total Kepala Keluarga</div>
                        </div>
                    </div>
                </div>
                <!-- Total Laki-laki -->
                <div class="col-lg-6">
                    <div class="d-flex" style="border-radius:20px; padding:20px; background-color:#f1f1f1; ">
                        <div class="d-flex align-items-center justify-content-center" style=" background-color:#c29912; border-radius:100%; width:80px; height:80px; margin-right:10px;">
                            <i class="fa-solid fa-mars" style="color: white; font-size:45px"></i>
                        </div>
                        <div class="d-flex flex-column justify-content-between p-1" style=" text-align: left;">
                            <span style="font-size: 30px; color:#99790e" class="fw-bold counter" data-target="{{ $profiledesa->total_laki_laki }}">0</span>
                            <div style="font-size: 16px" class="fw-bold">Total Laki-laki</div>
                        </div>
                    </div>
                </div>
                <!-- Jumlah Perempuan -->
                <div class="col-lg-6">
                    <div class="d-flex" style="border-radius:20px; padding:20px; background-color:#f1f1f1; ">
                        <div class="d-flex align-items-center justify-content-center" style=" background-color:#c29912; border-radius:100%; width:80px; height:80px; margin-right:10px;">
                            <i class="fa-solid fa-venus" style="color: white; font-size:45px"></i>
                        </div>
                        <div class="d-flex flex-column justify-content-between p-1" style=" text-align: left;">
                            <span style="font-size: 30px; color:#99790e" class="fw-bold counter" data-target="{{ $profiledesa->total_perempuan }}">0</span>
                            <div style="font-size: 16px" class="fw-bold">Total Perempuan</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="row g-4 text-center mt-5">
                <!-- Diagram Lingkaran Suku -->
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 p-4">
                        <h5 class="fw-bold mb-4">Suku</h5>
                        <canvas id="sukuChart" class="chart-canvas"></canvas>
                    </div>
                </div>
                <!-- Diagram Lingkaran Agama -->
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 p-4">
                        <h5 class="fw-bold mb-4">Agama</h5>
                        <canvas id="agamaChart" class="chart-canvas"></canvas>
                    </div>
                </div>
                <!-- Diagram Lingkaran Pendidikan -->
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 p-4">
                        <h5 class="fw-bold mb-4">Pendidikan</h5>
                        <canvas id="pendidikanChart" class="chart-canvas"></canvas>
                    </div>
                </div>
                <!-- Diagram Lingkaran Mata Pencaharian -->
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 p-4">
                        <h5 class="fw-bold mb-4">Mata Pencaharian</h5>
                        <canvas id="mataPencaharianChart" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Kependudukan Section -->

    <!-- Kantor Desa Section -->
    <section id="kantor-desa" class="py-5">
        <div class="container transition-container col-lg-10 shadow-sm p-4 rounded">
            <!-- Section Title -->
            <h2 class="subjudul text-center mb-5 fw-bold">Lokasi Desa</h2>

            <!-- Map Section -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="map-container rounded overflow-hidden shadow-sm">
                        {!! $profiledesa->peta_desa !!}
                    </div>
                </div>
            </div>

            <!-- Additional Info Section -->
            {{-- <div class="row g-4">
                <!-- Desa Information -->
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Informasi Desa</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <strong>Batas Utara:</strong> {{ $profiledesa->batas_utara }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Batas Selatan:</strong> {{ $profiledesa->batas_selatan }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Batas Barat:</strong> {{ $profiledesa->batas_barat }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Batas Timur:</strong> {{ $profiledesa->batas_timur }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Statistical Information -->
                {{-- <div class="col-lg-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Statistik Desa</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <strong>Luas Desa:</strong> {{ $profiledesa->luas_desa }} km²
                                </li>
                                <li class="list-group-item">
                                    <strong>Jumlah Dusun:</strong> {{ $profiledesa->jumlah_dusun }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Jumlah RT:</strong> {{ $profiledesa->jumlah_rt }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Jumlah RW:</strong> {{ $profiledesa->jumlah_rw }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            {{-- </div> --}}
            {{-- edit from here --}}
            <div class="row g-4 justify-content-center">
                <!-- Desa Information -->
                <div class="col-lg-6">
                    <div class="card border-0 rounded-4" style="background-color: #f1f1f1; ">
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color:#c29912">Informasi Kecamatan</h5>
                            <div class="d-flex flex-column">
                                <div class="d-flex justify-content-between gap-2">
                                    <div class="d-flex rounded-3 bg-light mb-2 align-items-center w-100" style="padding:10px">
                                        <i class="fa-solid fa-circle-arrow-up" style="font-size: 30px; margin-right:8px;color:#f2bf18;"></i>
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold" style="">Batas Utara</div>
                                            <div class="" style="color: #c29912">{{ $profiledesa->batas_utara }}</div>
                                        </div>
                                    </div>
                                    <div class="d-flex rounded-3 bg-light mb-2 align-items-center w-100" style="padding:10px">
                                        <i class="fa-solid fa-circle-arrow-down" style="font-size: 30px; margin-right:8px;color:#f2bf18;"></i>
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold" style="">Batas Selatan</div>
                                            <div class="" style="color: #c29912">{{ $profiledesa->batas_selatan }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between gap-2">
                                    <div class="d-flex rounded-3 bg-light mb-2 align-items-center w-100" style="padding:10px">
                                        <i class="fa-solid fa-circle-arrow-left" style="font-size: 30px; margin-right:8px;color:#f2bf18;"></i>
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold" style="">Batas Barat</div>
                                            <div class="" style="color: #c29912">{{ $profiledesa->batas_barat }}</div>
                                        </div>
                                    </div>
                                    <div class="d-flex rounded-3 bg-light mb-2 align-items-center w-100" style="padding:10px">
                                        <i class="fa-solid fa-circle-arrow-right" style="font-size: 30px; margin-right:8px;color:#f2bf18;"></i>
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold" style="">Batas Timur</div>
                                            <div class="" style="color: #c29912">{{ $profiledesa->batas_timur }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                </div>

                <!-- Statistical Information -->
                <div class="col-lg-6">
                    <div class="card border-0 rounded-4" style="background-color: #f1f1f1; ">
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color:#c29912">Statistik Kecamatan</h5>
                            <div class="d-flex flex-column">
                                <div class="d-flex justify-content-between gap-2">
                                    <div class="d-flex rounded-3 bg-light mb-2 align-items-center w-100" style="padding:10px">
                                        <i class="fa-solid fa-map" style="font-size: 30px; margin-right:8px;color:#f2bf18;"></i>
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold" style="">Luas Desa</div>
                                            <div class="" style="color: #c29912">{{ $profiledesa->luas_desa }} km²</div>
                                        </div>
                                    </div>
                                    <div class="d-flex rounded-3 bg-light mb-2 align-items-center w-100" style="padding:10px">
                                        <i class="fa-solid fa-layer-group" style="font-size: 30px; margin-right:8px;color:#f2bf18;"></i>
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold" style="">Jumlah Desa</div>
                                            <div class="" style="color: #c29912">{{ $profiledesa->jumlah_dusun }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between gap-2">
                                    <div class="d-flex rounded-3 bg-light mb-2 align-items-center w-100" style="padding:10px">
                                        <i class="fa-solid fa-building" style="font-size: 30px; margin-right:8px;color:#f2bf18;"></i>
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold" style="">Jumlah RT</div>
                                            <div class="" style="color: #c29912">{{ $profiledesa->jumlah_rt }}</div>
                                        </div>
                                    </div>
                                    <div class="d-flex rounded-3 bg-light mb-2 align-items-center w-100" style="padding:10px">
                                        <i class="fa-regular fa-building" style="font-size: 30px; margin-right:8px;color:#f2bf18;"></i>
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold" style="">Jumlah RW</div>
                                            <div class="" style="color: #c29912">{{ $profiledesa->jumlah_rw }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Kantor Desa Section -->
@endsection
@section('kodejsenduser')
    <script>
        const dataSuku = [
            {{ $profiledesa->total_melayu }},
            {{ $profiledesa->total_madura }},
            {{ $profiledesa->total_tionghoa }},
            {{ $profiledesa->total_dayak }},
            {{ $profiledesa->total_jawa }},
            {{ $profiledesa->total_bugis }},
            {{ $profiledesa->total_suku_lainnya }}
        ];

        const dataAgama = [
            {{ $profiledesa->total_islam }},
            {{ $profiledesa->total_katolik }},
            {{ $profiledesa->total_protestan }},
            {{ $profiledesa->total_buddha }},
            {{ $profiledesa->total_hindu }},
            {{ $profiledesa->total_konghuchu }}
        ];

        const dataPendidikan = [
            {{ $profiledesa->total_belum_sekolah }},
            {{ $profiledesa->total_tamat_SD }},
            {{ $profiledesa->total_tamat_SMP }},
            {{ $profiledesa->total_tamat_SMA }},
            {{ $profiledesa->total_diploma1 }},
            {{ $profiledesa->total_diploma2 }},
            {{ $profiledesa->total_diploma3 }},
            {{ $profiledesa->total_sarjana1 }},
            {{ $profiledesa->total_sarjana2 }},
            {{ $profiledesa->total_sarjana3 }},
        ];

        const dataMataPencaharian = [
            {{ $profiledesa->total_petani_pekebun }},
            {{ $profiledesa->total_buruhTani }},
            {{ $profiledesa->total_swasta }},
            {{ $profiledesa->total_pns }},
            {{ $profiledesa->total_pedagang }},
            {{ $profiledesa->total_pengrajin }},
            {{ $profiledesa->total_peternak }},
            {{ $profiledesa->total_nelayan }},
            {{ $profiledesa->total_lainlain }}
        ];

        // Diagram Lingkaran Suku
        const sukuCtx = document.getElementById('sukuChart').getContext('2d');
        const sukuChart = new Chart(sukuCtx, {
            type: 'pie',
            data: {
                labels: ['Melayu', 'Madura', 'Tionghoa', 'Dayak', 'Jawa', 'Bugis', 'Lainnya'],
                datasets: [{
                    label: 'Jumlah Suku',
                    data: dataSuku,
                    backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'magenta'],
                    hoverOffset: 0
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle'
                        }
                    },
                    datalabels: {
                        color: '#000',
                        anchor: 'end',
                        align: 'end',
                        offset: -50,
                        formatter: (value, context) => {
                            const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
                            const percentage = (value / total * 100).toFixed(1) + '%';
                            return percentage;
                        },
                        font: {
                            weight: 'medium'
                        }
                    }
                },
                layout: {
                    padding: 0
                }
            },
            plugins: [ChartDataLabels]
        });

        // Diagram Lingkaran Agama
        const agamaCtx = document.getElementById('agamaChart').getContext('2d');
        const agamaChart = new Chart(agamaCtx, {
            type: 'pie',
            data: {
                labels: ['Islam', 'Katolik', 'Protestan', 'Buddha', 'Hindu', 'Kong Hu Chu'],
                datasets: [{
                    label: 'Jumlah Agama',
                    data: dataAgama,
                    backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'magenta'],
                    hoverOffset: 0
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle'
                        }
                    },
                    datalabels: {
                        color: '#000',
                        anchor: 'end',
                        align: 'end',
                        offset: -50,
                        formatter: (value, context) => {
                            const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
                            const percentage = (value / total * 100).toFixed(1) + '%';
                            return percentage;
                        },
                        font: {
                            weight: 'medium'
                        }
                    }
                },
                layout: {
                    padding: 0
                }
            },
            plugins: [ChartDataLabels]
        });

        // Diagram Lingkaran Pendidikan
        const pendidikanCtx = document.getElementById('pendidikanChart').getContext('2d');
        const pendidikanChart = new Chart(pendidikanCtx, {
            type: 'pie',
            data: {
                labels: ['Belum Sekolah', 'Tamat SD/Sederajat', 'Tamat SMP/Sederajat', 'Tamat SMA/Sederajat',
                    'Diploma 1', 'Diploma 2', 'Diploma 3', 'Sarjana 1', 'Sarjana 2', 'Sarjana 3'
                ],
                datasets: [{
                    label: 'Jumlah',
                    data: dataSuku,
                    backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'magenta',
                        'cyan', 'pink', 'purple'
                    ],
                    hoverOffset: 0
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle'
                        }
                    },
                    datalabels: {
                        color: '#000',
                        anchor: 'end',
                        align: 'end',
                        offset: -50,
                        formatter: (value, context) => {
                            const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
                            const percentage = (value / total * 100).toFixed(1) + '%';
                            return percentage;
                        },
                        font: {
                            weight: 'medium'
                        }
                    }
                },
                layout: {
                    padding: 0
                }
            },
            plugins: [ChartDataLabels]
        });

        // Diagram Lingkaran Mata Pencaharian
        const mataPencaharianCtx = document.getElementById('mataPencaharianChart').getContext('2d');
        const mataPencaharianChart = new Chart(mataPencaharianCtx, {
            type: 'pie',
            data: {
                labels: ['Petani/Pekebun', 'Buruh Tani', 'Swasta', 'Pegawai Negeri (PNS)',
                    'Pedagang', 'Pengrajin', 'Peternak', 'Nelayan', 'Lain-lain'
                ],
                datasets: [{
                    label: 'Jumlah',
                    data: dataSuku,
                    backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'magenta',
                        'cyan', 'pink'
                    ],
                    hoverOffset: 0
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle'
                        }
                    },
                    datalabels: {
                        color: '#000',
                        anchor: 'end',
                        align: 'end',
                        offset: -50,
                        formatter: (value, context) => {
                            const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
                            const percentage = (value / total * 100).toFixed(1) + '%';
                            return percentage;
                        },
                        font: {
                            weight: 'medium'
                        }
                    }
                },
                layout: {
                    padding: 0
                }
            },
            plugins: [ChartDataLabels]
        });
    </script>
@endsection
