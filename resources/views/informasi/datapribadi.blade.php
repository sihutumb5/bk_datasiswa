@extends('layouts.dashboard')
@section('conten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <form action="{{ route('datapribadi.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <input type="file" name="image" class="form-control">
                                        <button type="submit" class="btn btn-success">Upload Gambar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        {{-- FORM Buat Import Excel ke Laravel --}}
                        <div class="col-6">
                            <form action="{{ route('importdatapribadi') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="file" name="file" class="form-control" placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="button-addon2" required>
                                    <button class="btn btn-primary btn-sm" type="submit" id="button-addon2">Import dari
                                        Excel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Judul Card Header --}}
                <div class="card-header d-flex justify-content-between">
                    <h4>SMK BAGIMU NEGERIKU</h4>
                    <p><b>Informasi data pribadi siswa</b></p>
                </div>
                <div class="card-header d-flex justify-content-between">
                    <div class="container">
                        <div class="row float-right">
                            <div class="col">
                                <a href="#" class="btn btn-warning btn-sm">Info Konseling</a>
                            </div>
                            <div class="col">
                                <a href="#" class="btn btn-danger btn-sm">Info Penilaian</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <img src="" alt="">
                </div>
                <div class="col-md-12">
                    @foreach ($ambil as $datapribadi)
                        <div class="card col-md-11">
                            <table class="">
                                <thead>
                                    <tr>
                                        <th><b><u><h3>Data Pribadi Siswa</h3>  </u></b></th>
                                    </tr>
                                </thead>
                        </div>
                        <tr>
                            <th>NIS</th>
                            <td>: {{ $datapribadi->nis }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>: {{ $datapribadi->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>: {{ $datapribadi->jk }}</td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td>: {{ $datapribadi->agama }}</td>
                        </tr>
                        <tr>
                            <th>Tempat Tanggal Lahir</th>
                            <td>: {{ $datapribadi->ttl }}</td>
                        </tr>
                        <tr>
                            <th>Status Dalam Keluarga</th>
                            <td>: {{ $datapribadi->status_dalam_keluarga }}</td>
                        </tr>
                        <tr>
                            <th>Status Kesehatan Anak</th>
                            <td>: {{ $datapribadi->status_kesehatan }}</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>: {{ $datapribadi->kelas }}</td>
                        </tr>
                        <tr>
                            <th>Alamat Lengkap</th>
                            <td>: {{ $datapribadi->alamat }}</td>
                        </tr>
                        <thead>
                            <tr>
                                <th><b><u><h3>Data Orang Tua</h3></u></b></th>
                            </tr>
                        </thead>
                        <tr>
                            <th>Nama Ayah</th>
                            <td>: {{ $datapribadi->nama_ayah }}</td>
                        </tr>
                        <tr>
                            <th>Pekerjaan Ayah</th>
                            <td>: {{ $datapribadi->pekerjaan_ayah }}</td>
                        </tr>
                        <tr>
                            <th>Penghasilan Ayah</th>
                            <td>: {{ $datapribadi->penghasilan_ayah }}</td>
                        </tr>
                        <tr>
                            <th>Nama Ibu</th>
                            <td>: {{ $datapribadi->nama_ibu }}</td>
                        </tr>
                        <tr>
                            <th>Pekerjaan Ibu</th>
                            <td>: {{ $datapribadi->pekerjaan_ibu }}</td>
                        </tr>
                        <tr>
                            <th>Penghasilan Ibu</th>
                            <td>: {{ $datapribadi->penghasilan_ibu }}</td>
                        </tr>
                        <tr>
                            <th>No.Telp / HP Orang Tua</th>
                            <td>: {{ $datapribadi->no_telp_ortu }}</td>
                        </tr>
                        <tr>
                            <th>Alamat Orang Tua</th>
                            <td>: {{ $datapribadi->alamat_ortu }}</td>
                        </tr>
                        <tr>
                            <th>Nama Wali</th>
                            <td>: {{ $datapribadi->nama_wali }}</td>
                        </tr>
                        <tr>
                            <th>Latar Belakang Pendididikan</th>
                            <td>: {{ $datapribadi->latar_belakang_pendidikan }}</td>
                        </tr>
                        <tr>
                            <th>Sekolah Asal</th>
                            <td>: {{ $datapribadi->sekolah_asal_smp }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Tahun Diterima di Sekolah</th>
                            <td>: {{ $datapribadi->tgl_thn_diterima_bn }}</td>
                        </tr>
                        <tr>
                            <th>Mutasi Sekolah SD/SMP/SMA/SMK</th>
                            <td>: {{ $datapribadi->thn_mutasi_sd_smp_sma }}</td>
                        </tr>
                        <tr>
                            <th>Mapel yang diminati</th>
                            <td>: {{ $datapribadi->mapel_minat }}</td>
                        </tr>
                        <tr>
                            <th>Alasan Mapel diminati</th>
                            <td>: {{ $datapribadi->alasan_minat }}</td>
                        </tr>
                        <tr>
                            <th>Mapel Kurang diminati</th>
                            <td>: {{ $datapribadi->mapel_tdk_minat }}</td>
                        </tr>
                        <tr>
                            <th>Alasan Mapel Kurang diminati</th>
                            <td>: {{ $datapribadi->alasan_tdk_minat }}</td>
                        </tr>
                        <tr>
                            <th>Cita Cita</th>
                            <td>: {{ $datapribadi->cita_cita }}</td>
                        </tr>
                        <tr>
                            <th>Teman Terdekat</th>
                            <td>: {{ $datapribadi->teman_terdekat }}</td>
                        </tr>
                        <tr>
                            <th>Guru Terdekat</th>
                            <td>: {{ $datapribadi->guru_terdekat }}</td>
                        </tr>
                        <tr>
                            <th>Penjelasan Sifat Postif yang dimiliki</th>
                            <td>: {{ $datapribadi->sifat_positif_alasan }}</td>
                        </tr>
                        <tr>
                            <th>Penjelasan Sifat Negatif yang dimiliki</th>
                            <td>: {{ $datapribadi->sifat_negatif_alasan }}</td>
                        </tr>
                        <tr>
                            <th>Penyakit yang pernah diderita</th>
                            <td>: {{ $datapribadi->penyakit_pernah_diderita }}</td>
                        </tr>
                        <tr>
                            <th>Hobi</th>
                            <td>: {{ $datapribadi->hobi }}</td>
                        </tr>
                        <tr>
                            <th>Prestasi yang pernah didapat</th>
                            <td>: {{ $datapribadi->prestasi }}</td>
                        </tr>
                        </table>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-success">Print</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
