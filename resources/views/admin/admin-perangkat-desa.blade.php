@extends('layouts.adminlayout')
@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-perangkat-desa">
            <div class="mt-3 mb-3">
                <h4>Kelola Perangkat Kecamatan</h4>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="tambahPerangkatCard">
                                <div class="card-body">
                                    <h5>Tambah Struktur Perangkat Kecamatan
                                        <hr>
                                    </h5>
                                    <form action="/strukturperangkatdesa/{{ $strukturperangkatdesa->id }}" method="POST"
                                        id="tambahPerangkatForm" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <input type="text" value="{{ $strukturperangkatdesa->id }}" name="id"
                                            hidden>
                                        <input type="text" name="oldImage" hidden
                                            value="{{ $strukturperangkatdesa->gambar_strukturdesa }}">
                                        <div class="form-group row mb-3">
                                            <label for="nama"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Tahun:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" name="nama"
                                                    value="{{ $strukturperangkatdesa->nama }}" required
                                                    placeholder="contoh: 2024 - 2026">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="foto"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Foto:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="file" class="form-control" name="gambar_strukturdesa"
                                                    accept="image/*">
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


                    <!-- Card Form untuk Tambah Perangkat -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="tambahPerangkatCard">
                                <div class="card-body">
                                    <h5>Tambah Perangkat Kecamatan
                                        <hr>
                                    </h5>
                                    <form action="/perangkatdesa" method="POST" id="tambahPerangkatForm"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row mb-3">
                                            <label for="nama"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Nama:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" name="nama" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="jabatan"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Jabatan:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" name="jabatan" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="foto"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Foto:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="file" class="form-control" name="gambar_perangkatdesa"
                                                    accept="image/*" required>
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

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="perangkatTableBody">
                            @foreach ($perangkatdesas as $perangkatdesa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $perangkatdesa->nama }}</td>
                                    <td>{{ $perangkatdesa->jabatan }}</td>
                                    <td><img src="{{ asset('storage/' . $perangkatdesa->gambar_perangkatdesa) }}"
                                            alt="" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                    <td>
                                        <a class="btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#editPerangkatModal"
                                            onclick="loadEditData({{ $perangkatdesa }})">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <button class="btn btn-danger border-0"
                                            onclick="showDeleteModal('{{ $perangkatdesa->id }}', '{{ $perangkatdesa->nama }}')">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Modal untuk Edit Perangkat -->
                    <div class="modal fade" id="editPerangkatModal" tabindex="-1" aria-labelledby="editPerangkatModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-warning">
                                    <h5 class="modal-title" id="editPerangkatModalLabel">Edit Perangkat Kecamatan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editPerangkatForm" method="POST" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        {{-- <input type="hidden" id="editIndex"> --}}
                                        <input type="hidden" name="id" id="editId">
                                        <input type="hidden" name="oldImage" id="editGambar">
                                        <div class="mb-3">
                                            <label for="editNama" class="form-label">Nama</label>
                                            <input type="text" name="nama" class="form-control" id="editNama"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editJabatan" class="form-label">Jabatan</label>
                                            <input type="text" name="jabatan" class="form-control" id="editJabatan"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editFoto" class="form-label">Foto</label>
                                            <img alt="" id="previewImage" class="img-thumbnail"
                                                style="width: 50px; height: 50px;">
                                            <input type="file" name="gambar_perangkatdesa" class="form-control"
                                                id="editFoto" accept="image/*" onchange="changeImage(event)">
                                        </div>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-warning text-white">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal Konfirmasi Hapus -->
                    <div class="modal fade" id="deletePerangkatModal" tabindex="-1"
                        aria-labelledby="deletePerangkatModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title" id="deletePerangkatModalLabel">Konfirmasi Hapus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus perangkat <strong
                                            id="deletePerangkatName"></strong>?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <form id="deletePerangkatForm" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
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
        function loadEditData(perangkatdesa) {
            // Isi nilai input dengan data dari parameter
            document.getElementById('editId').value = perangkatdesa.id;
            document.getElementById('editGambar').value = perangkatdesa.gambar_perangkatdesa;
            document.getElementById('editNama').value = perangkatdesa.nama;
            document.getElementById('editJabatan').value = perangkatdesa.jabatan;
            const previewImage = document.getElementById('previewImage');
            if (perangkatdesa.gambar_perangkatdesa) {
                previewImage.src = `/storage/${perangkatdesa.gambar_perangkatdesa}`;
            } else {
                previewImage.src = ''; // Kosongkan jika tidak ada foto
            }

            // Ubah action form untuk mengarahkan ke route update yang sesuai
            const editForm = document.getElementById('editPerangkatForm');
            editForm.action = `/perangkatdesa/${perangkatdesa.id}`;
        }

        function changeImage(event) {
            const previewImage = document.getElementById('previewImage');
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    console.log(e.target.result);

                    previewImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }

        function showDeleteModal(id, nama) {
            // Tampilkan nama perangkat di modal
            document.getElementById('deletePerangkatName').textContent = nama;

            // Atur action form penghapusan
            const deleteForm = document.getElementById('deletePerangkatForm');
            deleteForm.action = `/perangkatdesa/${id}`;

            // Tampilkan modal konfirmasi
            const deleteModal = new bootstrap.Modal(document.getElementById('deletePerangkatModal'));
            deleteModal.show();
        }
    </script>
@endsection
