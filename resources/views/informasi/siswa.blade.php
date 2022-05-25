@extends('layouts.dashboard')
@section('conten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" name="file" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="button-addon2" required>
                        <button class="btn btn-primary" type="submit" id="button-addon2">Import dari Excel</button>
                    </div>
                </form>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Masukan Nama Siswa" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari Siswa</button>
                </form>
                <br>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr class="text-info">
                            <th scope="col"></th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nis</th>
                            <th scope="col">Jenis kelamin</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jurusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0;
                        @endphp
                        @forelse ($siswa as $siswa)
                            <tr>
                                <th scope="row">{{ ++$no }}</th>
                                <td>

                                    <a class="text-info"
                                        href="{{ route('siswa.show', $siswa->id_data_pribadi) }}">{{ $siswa->nama_siswa }}
                                    </a>

                                </td>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->kelas }}</td>
                                <td>{{ $siswa->jurusan }}</td>
                                <td>{{ $siswa->kelamin }}</td>
                            </tr>
                        @empty
                            <td colspan="6" class="table-active text-center">Tidak Ada Data</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
