<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Document</title>

</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card-header d-flex justify-content-between">
                    <h3>Edit Profil</h3>
                </div>

                <div class="modal-body">
                    <form action="/profil/edit/{{ $dataprofil->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Sekolah</label>
                                    <input type="text" value="{{ $dataprofil->nama_sekolah }}" name="nama_sekolah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Status</label>
                                <select name="status" value="status" class="custom-select" required>
                                    <option value="Terakreditasi A" @if($dataprofil->status == 'Terakreditasi A') selected @endif>Terakreditasi A</option>
                                    <option value="Terakreditasi B" @if($dataprofil->status == 'Terakreditasi B') selected @endif>Terakreditasi B</option>
                                    <option value="Terakreditasi C" @if($dataprofil->status == 'Terakreditasi C') selected @endif>Terakreditasi C</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No Telefon</label>
                                    <input type="text" value="{{ $dataprofil->no_tlp }}" name="no_tlp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Website</label>
                                    <input type="text" value="{{ $dataprofil->website }}" name="website" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kepala Sekolah</label>
                                    <input type="text" value="{{ $dataprofil->nama_kepsek }}" name="nama_kepsek" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NIP./NUPTK</label>
                                    <input type="text" value="{{ $dataprofil->nip_nuptk }}" name="nip_nuptk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tahun Pelajaran</label>
                                    <input type="text" value="{{ $dataprofil->tahun_pelajar }}" name="tahun_pelajar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tempat/Tanggal awal ttd</label>
                                    <input type="date" value="{{ $dataprofil->tempat_tanggal_awal_ttd }}" name="tempat_tanggal_awal_ttd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Semester Aktif</label>
                                    <input type="text" value="{{ $dataprofil->semester_akhir }}" name="semester_akhir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" value="{{ $dataprofil->alamat }}" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" value="{{ $dataprofil->email }}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Gambar</label>
                                    <input type="file" value="foto" class="form-control" aria-describedby="inputGroup-sizing-default" name="foto" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-warning" type="submit" value="Simpan Data">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</html>
