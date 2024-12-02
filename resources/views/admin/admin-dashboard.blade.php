@extends('layouts.adminlayout')

@section('child')
<main class="content px-3 py-2">
    <div class="container-fluid" id="admin-dashboard">
        <div class="mt-3 mb-3">
            <h4>Dashboard</h4>
        </div>

        <!-- Row 1: 4 Data Cards -->
        <div class="row mb-3">
            @foreach([ 
                ['Jumlah Penduduk', $profiledesa->total_jiwa, 'fa-users'],
                ['Jumlah Kepala Keluarga', $profiledesa->total_kk, 'fa-house'],
                ['Jumlah Dusun', $profiledesa->jumlah_dusun, 'fa-map-marker-alt'],
                ['Luas Wilayah', $profiledesa->luas_desa, 'fa-ruler-combined']
            ] as $data)
            <div class="col-lg-3 col-md-3 col-sm-6 d-flex">
                <div class="card flex-fill border-0">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h4 class="mb-2"><i class="fas {{ $data[2] }} mr-5"></i> {{ $data[1] }}</h4>
                                <p class="jumlah mb-2">{{ $data[0] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Row 2: 4 Data Cards -->
        <div class="row mb-3">
            @foreach([
                ['Jumlah RW', $profiledesa->jumlah_rw, 'fa-users-cog'],
                ['Jumlah RT', $profiledesa->jumlah_rt, 'fa-building'],
                ['Jumlah Laki-laki', $profiledesa->total_laki_laki, 'fa-male'],
                ['Jumlah Perempuan', $profiledesa->total_perempuan, 'fa-female'],
            ] as $data)
            <div class="col-lg-3 col-md-3 col-sm-6 d-flex">
                <div class="card flex-fill border-0">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h4 class="mb-2"><i class="fas {{ $data[2] }} mr-3"></i> {{ $data[1] }}</h4>
                                <p class="jumlah mb-2">{{ $data[0] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Row 3: Map (Full Width) -->
        <div class="row">
            <div class="col-12 d-flex">
                <div class="card flex-fill border-0">
                    <div class="card-body py-4">
                        <h5 class="card-title">Peta Kecamatan</h5>
                        <div class="mt-3">
                            {!! $profiledesa->peta_desa !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
