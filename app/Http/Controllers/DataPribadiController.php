<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\datapribadisiswa;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;
class DataPribadiController extends Controller
{

    public function index()
    {
        $datapribadi = datapribadisiswa::all(); 
        return view ('informasi/datapribadi', compact('datapribadi'));
    }

    public function importdatapribadi(Request $request)
    {
        // $this->validate($request, [
        //     'file' => 'required|mimes:csv,xls,xlsx'
        // ]);

        $file = $request->file('file');
        $spreadsheet = IOFactory::load($file->getRealPath());
        $sheet        = $spreadsheet->getActiveSheet();
        $row_limit    = $sheet->getHighestDataRow();
        $column_limit = $sheet->getHighestDataColumn();
        $row_range    = range( 2, $row_limit );
        $column_range = range( 'AI', $column_limit );
        
        foreach ( $row_range as $row ) {
            $data[] = [
                'nis' =>$sheet->getCell( 'B' . $row )->getValue(),
                'nama_siswa' => $sheet->getCell( 'C' . $row )->getValue(),
                'jk' => $sheet->getCell( 'D' . $row )->getValue(),
                'agama' => $sheet->getCell( 'E' . $row )->getValue(),
                'ttl' => $sheet->getCell( 'F' . $row )->getValue(),
                'status_dalam_keluarga' => $sheet->getCell( 'G' . $row )->getValue(),
                'status_kesehatan' => $sheet->getCell( 'H' . $row )->getValue(),
                'kelas' => $sheet->getCell( 'I' . $row )->getValue(),
                'alamat' => $sheet->getCell( 'J' . $row )->getValue(),
                'nama_ayah' => $sheet->getCell( 'K' . $row )->getValue(),
                'pekerjaan_ayah' => $sheet->getCell( 'L' . $row )->getValue(),
                'penghasilan_ayah' => $sheet->getCell( 'M' . $row )->getValue(),
                'nama_ibu' => $sheet->getCell( 'N' . $row )->getValue(),
                'pekerjaan_ibu' => $sheet->getCell( 'O' . $row )->getValue(),
                'penghasilan_ibu' => $sheet->getCell( 'P' . $row )->getValue(),
                'no_telp_ortu' => $sheet->getCell( 'Q' . $row )->getValue(),
                'alamat_ortu' => $sheet->getCell( 'R' . $row )->getValue(),
                'nama_wali' => $sheet->getCell( 'S' . $row )->getValue(),
                'sekolah_asal_smp' => $sheet->getCell( 'T' . $row )->getValue(),
                'tgl_thn_diterima_bn' => $sheet->getCell( 'U' . $row )->getValue(),
                'latar_belakang_pendidikan' => $sheet->getCell( 'V' . $row )->getValue(),
                'thn_mutasi_sd_smp_sma' => $sheet->getCell( 'W' . $row )->getValue(),
                'mapel_minat' => $sheet->getCell( 'X' . $row )->getValue(),
                'alasan_minat' => $sheet->getCell( 'Y' . $row )->getValue(),
                'mapel_tdk_minat' => $sheet->getCell( 'Z' . $row )->getValue(),
                'alasan_tdk_minat' => $sheet->getCell( 'AA' . $row )->getValue(),
                'cita_cita' => $sheet->getCell( 'AB' . $row )->getValue(),
                'teman_terdekat' => $sheet->getCell( 'AC' . $row )->getValue(),
                'guru_terdekat' => $sheet->getCell( 'AD' . $row )->getValue(),
                'sifat_positif_alasan' => $sheet->getCell( 'AE' . $row )->getValue(),
                'sifat_negatif_alasan' => $sheet->getCell( 'AF' . $row )->getValue(),
                'penyakit_pernah_diderita' => $sheet->getCell( 'AG' . $row )->getValue(),
                'hobi' => $sheet->getCell( 'AH' . $row )->getValue(),
                'prestasi' => $sheet->getCell( 'AI' . $row )->getValue(),
            ];
            // dd($data);
        }
            DB::table('datapribadisiswa')->insert($data);
            return redirect()->route('datapribadi.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $image = $request->file('foto');
        $nameImage = $request->file('foto')->getClientOriginalName();
        $oriPath = public_path() . '/fotosiswa/' . $nameImage;
        $oriImage = image::make($image)->save($oriPath);

        fotopribadisiswa::create([
            'foto'=> $nameImage,
        ]);
        
        return redirect()->route('datapribadi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
