<?php

namespace App\Http\Controllers;

use App\Models\nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    public function index()
    {
        $nasabah = Nasabah::paginate(5);
        return $nasabah;
    }

    public function store(Request $request)
    {
        $nasabah = new Nasabah;
        $nasabah->user_id = $request->user_id;
        $nasabah->jenis = $request->jenis;
        $nasabah->nomor = $request->nomor;
        $nasabah->identitas_jenis = $request->identitas_jenis;
        $nasabah->identitas_nomor = $request->identitas_nomor;
        $nasabah->nama_depan = $request->nama_depan;
        $nasabah->nama_belakang = $request->nama_belakang;
        $nasabah->nama_instansi = $request->nama_instansi;
        $nasabah->jenis_kelamin = $request->jenis_kelamin;
        $nasabah->lahir_tempat = $request->lahir_tempat;
        $nasabah->lahir_tanggal = $request->lahir_tanggal;
        $nasabah->nama_ibu = $request->nama_ibu;
        $nasabah->alamat_identitas = $request->alamat_identitas;
        $nasabah->alamat_domisili = $request->alamat_domisili;
        $nasabah->nomor_kontak = $request->nomor_kontak;
        $nasabah->aktif = $request->aktif;
        $nasabah->save();

        return response()->json([
            'message' => 'Data Nasabah Tersimpan',
            'data' => $nasabah
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $nasabah = Nasabah::find($id);
        $nasabah->update($request->all());
        return $nasabah;
    }

    public function destroy($id)
    {
        $nasabah = Nasabah::destroy($id);
        return response(['Data Nasabah Berhasil Di Hapus']);
    }

    public function show($id)
    {
        $nasabah = Nasabah::find($id);
        return $nasabah;
    }

    public function search($nama_depan)
    {
        $search = Nasabah::where('nama_depan' , 'like' , '%'.$nama_depan.'%')->get();
        return $search;
    }
}
