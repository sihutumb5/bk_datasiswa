<?php

namespace App\Http\Controllers;
use App\Models\profil;
use Illuminate\Http\Request;
use DB;
use Image;

class ProfilController extends Controller
{
    public function index()
    {
        return view ('profil', ['dataprofil' => profil::simplePaginate(1)]);
    }

    public function store(Request $request)
    {
        $image = $request->file('foto');
        $nameImage = $request->file('foto')->getClientOriginalName();
        $oriPath = public_path() . '/fotosekolah/' . $nameImage;
        $oriImage = image::make($image)->save($oriPath);

        profil::create([
            'nama_sekolah' => $request['nama_sekolah'],
            'status' => $request['status'],
            'alamat' => $request['alamat'],
            'no_tlp' => $request['no_tlp'],
            'website' => $request['website'],
            'email' => $request['email'],
            'nama_kepsek' => $request['nama_kepsek'],
            'nip_nuptk' => $request['nip_nuptk'],
            'tahun_pelajar' => $request['tahun_pelajar'],
            'tempat_tanggal_awal_ttd' => $request['tempat_tanggal_awal_ttd'],
            'semester_akhir' => $request['semester_akhir'],
            'foto'=> $nameImage,
        ]);
        
        return redirect()->route('profil.index');
    }

    public function edit($id)
    {
        $dataprofil = Profil::findorfail($id);
        
        return view('editprofil', compact('dataprofil'));
    }

    public function update(Request $request, $id)
    {
        $image = $request->file('foto');
        $nameImage = $request->file('foto')->getClientOriginalName();
        $oriPath = public_path() . '/fotosekolah/' . $nameImage;
        $oriImage = image::make($image)->save($oriPath);

        $dataprofil = DB::table('profils')->where('id', $id)->update([
            'nama_sekolah' => $request->nama_sekolah,
            'status' => $request->status,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'website' => $request->website,
            'email' => $request->email,
            'nama_kepsek' => $request->nama_kepsek,
            'nip_nuptk' => $request->nip_nuptk,
            'tahun_pelajar' => $request->tahun_pelajar,
            'tempat_tanggal_awal_ttd' => $request->tempat_tanggal_awal_ttd,
            'semester_akhir' => $request->semester_akhir,
            'foto'=> $nameImage,
        ]);
        return redirect()->route('profil.index');
    }

    public function destroy($id)
    {
        $deleted = DB::table('profils')->where('id', $id)->delete();
        return redirect()->route('profil.index');

    }
}
