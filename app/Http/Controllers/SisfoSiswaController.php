<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\sisfosiswa;
use App\Models\datapribadisiswa;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;

class SisfoSiswaController extends Controller
{

    public function index()
    {
        $siswa = sisfosiswa::all(); 
        // dd($siswa);
        return view ('informasi/siswa', compact('siswa'));
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        $spreadsheet = IOFactory::load($file->getRealPath());
        $sheet        = $spreadsheet->getActiveSheet();
        $row_limit    = $sheet->getHighestDataRow();
        $column_limit = $sheet->getHighestDataColumn();
        $row_range    = range( 1, $row_limit );
        $column_range = range( 'F', $column_limit );
        
        foreach ( $row_range as $row ) {
            $data[] = [
                'nama_siswa' =>$sheet->getCell( 'B' . $row )->getValue(),
                'nis' => $sheet->getCell( 'C' . $row )->getValue(),
                'kelas' => $sheet->getCell( 'D' . $row )->getValue(),
                'jurusan' => $sheet->getCell( 'E' . $row )->getValue(),
                'kelamin' => $sheet->getCell( 'F' . $row )->getValue(),
            ];
        }
            // dd($data);
            DB::table('sisfosiswas')->insert($data);
            return redirect()->route('siswa.index');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $tes=sisfosiswa::where('id_data_pribadi',$id)->get();
        // dd($tes[0]->nama_siswa);
        $coba=$tes[0]->nis;
        $ambil=datapribadisiswa::where('nis',$coba)->get();
        // dd($ambil);
        return view ('informasi/datapribadi', compact('ambil'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
