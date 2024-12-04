@extends('layouts.adminlayout')
@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-layanan-administrasi">
            <div class="mt-3 mb-3">
                <h4>Kelola Layanan Administrasi</h4>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="tambahFasilitasCard">
                                <div class="card-body">
                                    <h5>Tambah Layanan Administrasi
                                        <hr>
                                    </h5>
                                    <form id="tambahLayananForm" action="/layananadministrasi" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <!-- Input Nama Layanan -->
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-2 col-md-3 col-sm-4 form-label">Nama
                                                Layanan:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" name="nama_layanan"
                                                    name="nama_layanan" required>
                                            </div>
                                        </div>

                                        <!-- Input Deskripsi Layanan -->
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-2 col-md-3 col-sm-4 form-label">Deskripsi:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <textarea class="form-control" name="deskripsi" required></textarea>
                                            </div>
                                        </div>

                                        <!-- Input Persyaratan Layanan -->
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-2 col-md-3 col-sm-4 form-label">Persyaratan:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <textarea class="form-control" id="summernote-layadmin-create" name="persyaratan" required></textarea>
                                            </div>
                                        </div>

                                        <!-- Tombol Submit -->
                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                            <button type="button" onclick="resetForm()"
                                                class="btn btn-secondary ms-2">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Layanan</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="layananTableBody">
                            @foreach ($layananadministrasis as $layananadministrasi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $layananadministrasi->nama_layanan }}</td>
                                    <td>{!! $layananadministrasi->deskripsi !!}</td>
                                    <td>
                                        <a class="btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#editLayananAdministrasiModal"
                                            onclick="loadEditData({{ $layananadministrasi }})">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <button class="btn btn-danger border-0"
                                            onclick="showDeleteModal('{{ $layananadministrasi->id }}', '{{ $layananadministrasi->nama_layanan }}')">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Modal untuk Edit Layanan -->
                    <div class="modal fade" id="editLayananAdministrasiModal" tabindex="-1"
                        aria-labelledby="editLayananModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-warning">
                                    <h5 class="modal-title" id="editLayananModalLabel">Edit Layanan Administrasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editLayananForm" method="POST">
                                        @method('put')
                                        @csrf
                                        <input type="hidden" id="editId" name="id">
                                        <!-- Menyimpan index untuk mengedit -->
                                        <div class="mb-3">
                                            <label for="editNamaLayanan" class="form-label">Nama Layanan</label>
                                            <input type="text" class="form-control" name="nama_layanan"
                                                id="editNamaLayanan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editDeskripsiLayanan" class="form-label">Deskripsi</label>
                                            <textarea type="text" class="form-control" name="deskripsi" id="editDeskripsiLayanan" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editPersyaratanLayanan" class="form-label">Persyaratan</label>
                                            <textarea type="text" class="form-control" name="persyaratan"id="summernote-layadmin-update"
                                                id="editPersyaratanLayanan" required></textarea>
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
                    <div class="modal fade" id="deleteLayananModal" tabindex="-1" aria-labelledby="deleteLayananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title" id="deleteLayananModalLabel">Konfirmasi Hapus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus layanan <strong id="deleteLayananName"></strong>?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <form id="deleteLayananForm" method="POST" class="d-inline">
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
        function loadEditData(layananadministrasi) {
            // Isi nilai input dengan data dari parameter
            document.getElementById('editId').value = layananadministrasi.id;
            document.getElementById('editNamaLayanan').value = layananadministrasi.nama_layanan;
            document.getElementById('editDeskripsiLayanan').value = layananadministrasi.deskripsi;
            $('#summernote-layadmin-update').summernote('code', layananadministrasi.persyaratan);

            // Ubah action form untuk mengarahkan ke route update yang sesuai
            const editForm = document.getElementById('editLayananForm');
            editForm.action = `/layananadministrasi/${layananadministrasi.id}`;
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

        function showDeleteModal(id, namaLayanan) {
            // Tampilkan nama layanan di modal
            document.getElementById('deleteLayananName').textContent = namaLayanan;

            // Atur action form penghapusan
            const deleteForm = document.getElementById('deleteLayananForm');
            deleteForm.action = `/layananadministrasi/${id}`;

            // Tampilkan modal konfirmasi
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteLayananModal'));
            deleteModal.show();
        }
    </script>
@endsection
