@extends('layouts.dashboard')
@section('conten')
<div class="container">
    <div class="col">
        <div class="card-header d-flex justify-content-between">
            <h4>Identitas Sekolah</h4>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah
            </button>
        </div>
        <hr>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Halo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route ('profil.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Sekolah</label>
                                        <input type="text" name="nama_sekolah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Status</label>
                                    <select name="status" class="custom-select">
                                        <option value="Terakreditasi A">Terakreditasi A</option>
                                        <option value="Terakreditasi B">Terakreditasi B</option>
                                        <option value="Terakreditasi C">Terakreditasi C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No Telefon</label>
                                        <input type="text" name="no_tlp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Website</label>
                                        <input type="text" name="website" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Kepala Sekolah</label>
                                        <input type="text" name="nama_kepsek" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIP./NUPTK</label>
                                        <input type="text" name="nip_nuptk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tahun Pelajaran</label>
                                        <input type="text" name="tahun_pelajar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tempat/Tanggal awal ttd</label>
                                        <input type="date" name="tempat_tanggal_awal_ttd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Semester Aktif</label>
                                        <input type="text" name="semester_akhir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        <input type="file" class="form-control" aria-describedby="inputGroup-sizing-default" name="foto" required>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        @foreach($dataprofil as $p)
        <div class="card">
            <table class="table">
                <div class="card">
                    <th><img src="{{asset('fotosekolah/'.$p->foto)}}" alt="" style="width:150px " ;></th>
                </div>
                <tr>
                    <th>1</th>
                    <th>Nama Sekolah</th>
                    <td>{{ $p->nama_sekolah }}</td>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Status</th>
                    <td>{{ $p->status }}</td>
                </tr>
                <tr>
                    <th>3</th>
                    <th>Alamat Lengkap</th>
                    <td>{{ $p->alamat }}</td>
                </tr>
                <tr>
                    <th>4</th>
                    <th>No Telepon</th>
                    <td>{{ $p->no_tlp }}</td>
                </tr>
                <tr>
                    <th>5</th>
                    <th>Website</th>
                    <td>{{ $p->website }}</td>
                </tr>
                <tr>
                    <th>6</th>
                    <th>Email</th>
                    <td>{{ $p->email }}</td>
                </tr>
                <tr>
                    <th>7</th>
                    <th>Nama Kepala Sekolah</th>
                    <td>{{ $p->nama_kepsek }}</td>
                </tr>
                <tr>
                    <th>8</th>
                    <th>NIP./NUPTK</th>
                    <td>{{ $p->nip_nuptk }}</td>
                </tr>
                <tr>
                    <th>9</th>
                    <th>Tahun Pelajaran</th>
                    <td>{{ $p->tahun_pelajar }}</td>
                </tr>
                <tr>
                    <th>10</th>
                    <th>Tempat/Tanggal awal ttd</th>
                    <td>{{ $p->tempat_tanggal_awal_ttd }}</td>
                </tr>
                <tr>
                    <th>11</th>
                    <th>Semester Aktif</th>
                    <td>{{ $p->semester_akhir }}</td>
                    <td>
                        <form action="{{ route('profil.destroy', $p->id) }}" method="POST">
                            <a href="{{ route('profil.edit', $p->id ) }}" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        @endforeach
        <div class="modal-footer">
            {!! $dataprofil->links() !!}
        </div>
    </div>
</div>
@endsection
