@extends('layouts.adminlayout')

@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-layanan-publik">
            <div class="mt-3 mb-3">
                <h4>Kelola Layanan Publik</h4>
            </div>
            <div class="row">
                <div class="container">
                    <!-- Card Form untuk Tambah Fasilitas -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="tambahFasilitasCard">
                                <div class="card-body">
                                    <h5>Tambah Fasilitas Kecamatan</h5>
                                    <hr>
                                    <form action="/layananpublik" method="POST" enctype="multipart/form-data"
                                        id="tambahFasilitasForm">
                                        @csrf
                                        <div class="form-group row mb-3">
                                            <label for="kategoriFasilitas"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Kategori Fasilitas:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <select name="kategori_fasilitas" class="form-control"
                                                    id="kategoriFasilitas" required>
                                                    <option value="">-- pilih kategori --</option>
                                                    <option value="pendidikan">Pendidikan</option>
                                                    <option value="publik">Publik</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="namaFasilitas" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama
                                                Fasilitas:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input name="nama_fasilitas" type="text" class="form-control"
                                                    id="namaFasilitas" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="urlAlamat" class="col-lg-2 col-md-3 col-sm-4 form-label">URL
                                                Alamat:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input name="url_alamat" type="url" class="form-control" id="urlAlamat"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="fotoFasilitas" class="col-lg-2 col-md-3 col-sm-4 form-label">Foto
                                                Fasilitas:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input name="gambar_fasilitas" type="file" class="form-control"
                                                    id="fotoFasilitas" accept="image/*" required>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabel Fasilitas Pendidikan -->
                    <h5 class="mt-3">Fasilitas Pendidikan</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>URL Alamat</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fasilitasPendidikan as $fasilitaspendidikan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $fasilitaspendidikan->kategori_fasilitas }}</td>
                                    <td>{{ $fasilitaspendidikan->nama_fasilitas }}</td>
                                    <td>{{ $fasilitaspendidikan->url_alamat }}</td>
                                    <td><img src="{{ asset('storage/' . $fasilitaspendidikan->gambar_fasilitas) }}"
                                            class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                    <td>
                                        <a class="btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#editPerangkatModal"
                                            onclick="loadEditData({{ $fasilitaspendidikan }})"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <button class="btn btn-danger border-0"
                                            onclick="konfirmasiHapus('{{ $fasilitaspendidikan->nama_fasilitas }}', '/layananpublik/{{ $fasilitaspendidikan->id }}')"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <h5 class="mt-3">Fasilitas Publik</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>URL Alamat</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fasilitasPublik as $fasilitaspublik)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $fasilitaspublik->kategori_fasilitas }}</td>
                                    <td>{{ $fasilitaspublik->nama_fasilitas }}</td>
                                    <td>{{ $fasilitaspublik->url_alamat }}</td>
                                    <td><img src="{{ asset('storage/' . $fasilitaspublik->gambar_fasilitas) }}"
                                            class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                    <td>
                                        <a class="btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#editPerangkatModal"
                                            onclick="loadEditData({{ $fasilitaspublik }})"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <button class="btn btn-danger border-0"
                                            onclick="konfirmasiHapus('{{ $fasilitaspublik->nama_fasilitas }}', '/layananpublik/{{ $fasilitaspublik->id }}')"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Modal Edit Fasilitas -->
                    <div class="modal fade" id="editPerangkatModal" tabindex="-1" aria-labelledby="editPerangkatModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-warning">
                                    <h5 class="modal-title" id="editPerangkatModalLabel">Edit Fasilitas</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form id="editPerangkatForm" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <input type="hidden" id="editId" name="id">
                                        <div class="mb-3">
                                            <label for="editKategoriFasilitas" class="form-label">Kategori
                                                Fasilitas:</label>
                                            <select name="kategori_fasilitas" id="editKategoriFasilitas"
                                                class="form-control" required>
                                                <option value="pendidikan">Pendidikan</option>
                                                <option value="publik">Publik</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editNama" class="form-label">Nama Fasilitas:</label>
                                            <input type="text" name="nama_fasilitas" id="editNama"
                                                class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editurlAlamat" class="form-label">URL Alamat:</label>
                                            <input type="url" name="url_alamat" id="editurlAlamat"
                                                class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editGambarFasilitas" class="form-label">Foto Fasilitas:</label>
                                            <input type="file" name="gambar_fasilitas" id="editGambarFasilitas"
                                                class="form-control" accept="image/*">
                                            <img id="previewImage" src="" class="img-thumbnail mt-2"
                                                style="width: 100px; height: 100px;">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-warning text-white">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Konfirmasi Hapus -->
                    <div class="modal fade" id="konfirmasiHapusModal" tabindex="-1"
                        aria-labelledby="konfirmasiHapusModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title" id="konfirmasiHapusModalLabel">Konfirmasi Hapus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus data <strong id="dataNamaHapus"></strong>?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <form id="formHapus" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('kodejs')
    <script>
        function konfirmasiHapus(namaFasilitas, urlHapus) {
            document.getElementById('dataNamaHapus').textContent = namaFasilitas;
            document.getElementById('formHapus').action = urlHapus;
            const konfirmasiHapusModal = new bootstrap.Modal(document.getElementById('konfirmasiHapusModal'));
            konfirmasiHapusModal.show();
        }

        function loadEditData(layananpublik) {
            document.getElementById('editId').value = layananpublik.id;
            document.getElementById('editKategoriFasilitas').value = layananpublik.kategori_fasilitas;
            document.getElementById('editNama').value = layananpublik.nama_fasilitas;
            document.getElementById('editurlAlamat').value = layananpublik.url_alamat;
            const previewImage = document.getElementById('previewImage');
            if (layananpublik.gambar_fasilitas) {
                previewImage.src = `/storage/${layananpublik.gambar_fasilitas}`;
            } else {
                previewImage.src = '';
            }
            document.getElementById('editPerangkatForm').action = `/layananpublik/${layananpublik.id}`;
        }
    </script>
@endsection
