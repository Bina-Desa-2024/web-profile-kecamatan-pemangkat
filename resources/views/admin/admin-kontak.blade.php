@extends('layouts.adminlayout')
@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-kontak">
            <div class="mt-3 mb-3">
                <h4>Kelola Kontak Desa</h4>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-3">

                            <!-- WhatsApp -->
                            <form action="/kontak/{{ $kontak->id }}" method="POST">
                                @method('put')
                                @csrf
                                <input type="text" name="id" value="{{ $kontak->id }}" hidden>
                                <div class="form-group row mb-3">
                                    <label for="whatsapp" class="col-lg-2 col-md-3 col-sm-4 form-label">Nomor HP:</label>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" value="{{ $kontak->no_hp }}"
                                            name="no_hp" id="whatsapp" required>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="form-group row mb-3">
                                    <label for="email" class="col-lg-2 col-md-3 col-sm-4 form-label">Email:</label>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <input type="email" class="form-control" value="{{ $kontak->email }}"
                                            name="email" id="email" required>
                                    </div>
                                </div>

                                <!-- Facebook -->
                                <div class="form-group row mb-3">
                                    <label class="col-lg-2 col-md-3 col-sm-4 form-label">URL Facebook:</label>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" value="{{ $kontak->url_fb }}"
                                            name="url_fb" required>
                                    </div>
                                </div>

                                <!-- Instagram -->
                                <div class="form-group row mb-3">
                                    <label for="instagram" class="col-lg-2 col-md-3 col-sm-4 form-label">URL
                                        Instagram:</label>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" value="{{ $kontak->url_ig }}"
                                            name="url_ig" id="instagram" required>
                                    </div>
                                </div>

                                <!-- Youtube -->
                                <div class="form-group row mb-3">
                                    <label class="col-lg-2 col-md-3 col-sm-4 form-label">URL Youtube:</label>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" value="{{ $kontak->url_yt }}"
                                            name="url_yt" required>
                                    </div>
                                </div>
                                <!-- Submit Button -->
                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-simpan">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
@endsection


@section('kodejs')
    <script></script>
@endsection
