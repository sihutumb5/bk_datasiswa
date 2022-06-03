@extends('layouts.dashboard')
@section('conten')
<style id="table_style" type="text/css">
    body {
        font-family: Arial;
        font-size: 12pt;
        display: block;
        /* Not really needed in all cases */
        position: relative;
        width: auto;
        height: auto;
        overflow: visible;
    }

    table {
        border: 1px solid #ccc;
        border-collapse: collapse;
    }

    table th {
        background-color: #f8f8f4;
        color: #333;
        font-weight: bold;
    }

    table th,
    table td {
        padding: 5px;
        border: 1px solid #ccc;
    }

    @media print {
        img {
            margin-left: 350px;
            border-radius: 0% !important;
            width: 225px;
            height: auto;
            margin-bottom: 20px;
        }

        table {
            font-size: 13.5px;
        }

        @page 
        {
            margin: 0mm;
        }
    }

</style>
{{-- <script type="text/javascript">
    function PrintTable() {
        var printWindow = window.open('', '', 'height=200,width=400');
        printWindow.document.write('<html><head><title>Table Contents</title>');
        //Print the Table CSS.
        var table_style = document.getElementById("table_style").innerHTML;
        printWindow.document.write('<style type = "text/css">');
        printWindow.document.write(table_style);
        printWindow.document.write('</style>');
        printWindow.document.write('</head>');
        //Print the DIV contents ie. the HTML Table.
        printWindow.document.write('<body>');
        var divContents = document.getElementById("dvContents").innerHTML;
        printWindow.document.write(divContents);
        printWindow.document.write('</body>');
        printWindow.document.write('</html>');
        printWindow.document.close();
        printWindow.print();
    }

</script> --}}
<body onload="window.print()" onafterprint="window.close()">
    
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="col-md-12">
                @foreach ($ambil as $ambil)
                <div class="container" id="dvContents">

                    
                    <table id="PrintTable">
                        
                        @isset($foto)
                        <img src="{{url('/fotosiswa/') . '/' . $foto}}" class="img-fluid" alt="{{ $foto }}">
                        @endisset
                        
                        <tr>
                            <th>
                                <b>
                                    <h4 class="text-primary">Data Pribadi Siswa</h4>
                                </b>
                            </th>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <th>NIS</th>
                            <td>: {{ $ambil->nis }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>: {{ $ambil->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>: {{ $ambil->jk }}</td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td>: {{ $ambil->agama }}</td>
                        </tr>
                        <tr>
                            <th>Tempat Tanggal Lahir</th>
                            <td>: {{ $ambil->ttl }}</td>
                        </tr>
                        <tr>
                            <th>Status Dalam Keluarga</th>
                            <td>: {{ $ambil->status_dalam_keluarga }}</td>
                        </tr>
                        <tr>
                            <th>Status Kesehatan Anak</th>
                            <td>: {{ $ambil->status_kesehatan }}</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>: {{ $ambil->kelas }}</td>
                        </tr>
                        <tr>
                            <th>Alamat Lengkap</th>
                            <td>: {{ $ambil->alamat }}</td>
                        </tr>
                        
                        
                        <tr>
                            <th>
                                <b>
                                    <h4 class="text-primary">Data Orang Tua</h4>
                                </b>
                            </th>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <th>Nama Ayah</th>
                            <td>: {{ $ambil->nama_ayah }}</td>
                        </tr>
                        <tr>
                            <th>Pekerjaan Ayah</th>
                            <td>: {{ $ambil->pekerjaan_ayah }}</td>
                        </tr>
                        <tr>
                            <th>Penghasilan Ayah</th>
                            <td>: {{ $ambil->penghasilan_ayah }}</td>
                        </tr>
                        <tr>
                            <th>Nama Ibu</th>
                            <td>: {{ $ambil->nama_ibu }}</td>
                        </tr>
                        <tr>
                            <th>Pekerjaan Ibu</th>
                            <td>: {{ $ambil->pekerjaan_ibu }}</td>
                        </tr>
                        <tr>
                            <th>Penghasilan Ibu</th>
                            <td>: {{ $ambil->penghasilan_ibu }}</td>
                        </tr>
                        <tr>
                            <th>No.Telp / HP Orang Tua</th>
                            <td>: {{ $ambil->no_telp_ortu }}</td>
                        </tr>
                        <tr>
                            <th>Alamat Orang Tua</th>
                            <td>: {{ $ambil->alamat_ortu }}</td>
                        </tr>
                        <tr>
                            <th>Nama Wali</th>
                            <td>: {{ $ambil->nama_wali }}</td>
                        </tr>
                        <tr>
                            <th>Latar Belakang Pendididikan</th>
                            <td>: {{ $ambil->latar_belakang_pendidikan }}</td>
                        </tr>
                        <tr>
                            <th>Sekolah Asal</th>
                            <td>: {{ $ambil->sekolah_asal_smp }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Tahun Diterima di Sekolah</th>
                            <td>: {{ $ambil->tgl_thn_diterima_bn }}</td>
                        </tr>
                        <tr>
                            <th>Mutasi Sekolah SD/SMP/SMA/SMK</th>
                            <td>: {{ $ambil->thn_mutasi_sd_smp_sma }}</td>
                        </tr>
                        <br>
                        <tr>
                            <th>Mapel yang diminati</th>
                            <td>: {{ $ambil->mapel_minat }}</td>
                        </tr>
                        <tr>
                            <th>Alasan Mapel diminati</th>
                            <td>: {{ $ambil->alasan_minat }}</td>
                        </tr>
                        <tr>
                            <th>Mapel Kurang diminati</th>
                            <td>: {{ $ambil->mapel_tdk_minat }}</td>
                        </tr>
                        <tr>
                            <th>Alasan Mapel Kurang diminati</th>
                            <td>: {{ $ambil->alasan_tdk_minat }}</td>
                        </tr>
                        <tr>
                            <th>Cita Cita</th>
                            <td>: {{ $ambil->cita_cita }}</td>
                        </tr>
                        <tr>
                            <th>Teman Terdekat</th>
                            <td>: {{ $ambil->teman_terdekat }}</td>
                        </tr>
                        <tr>
                            <th>Guru Terdekat</th>
                            <td>: {{ $ambil->guru_terdekat }}</td>
                        </tr>
                        <tr>
                            <th>Penjelasan Sifat Postif yang dimiliki</th>
                            <td>: {{ $ambil->sifat_positif_alasan }}</td>
                        </tr>
                        <tr>
                            <th>Penjelasan Sifat Negatif yang dimiliki</th>
                            <td>: {{ $ambil->sifat_negatif_alasan }}</td>
                        </tr>
                        <tr>
                            <th>Penyakit yang pernah diderita</th>
                            <td>: {{ $ambil->penyakit_pernah_diderita }}</td>
                        </tr>
                        <tr>
                            <th>Hobi</th>
                            <td>: {{ $ambil->hobi }}</td>
                        </tr>
                        <tr>
                            <th>Prestasi yang pernah didapat</th>
                            <td>: {{ $ambil->prestasi }}</td>
                        </tr>
                    </table>
                    
                </div>
                @endforeach
                
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>
</div>
</body>

@endsection
