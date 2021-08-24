<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Permohonan::all();
        $permohonan = Permohonan::paginate(5);
        return $permohonan;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_handphone' => 'required',
            'nama_pemohon' => 'required',
            'item' => 'required',
            'nilai_harga_item' => 'required',
            'nilai_uang_muka' => 'required',
            'nilai_keuntungan' => 'required',
            'nilai_kredit' => 'required',
            'masa' => 'required',
            'nilai_cicilan' => 'required'
        ]);

        // return Permohonan::create($request->all());

        $permohonan = new Permohonan;
        $permohonan->nomor_handphone = $request->nomor_handphone;
        $permohonan->nama_pemohon = $request->nama_pemohon;
        $permohonan->item = $request->item;
        $permohonan->nilai_harga_item = $request->nilai_harga_item;
        $permohonan->nilai_uang_muka = $request->nilai_uang_muka;
        $permohonan->nilai_keuntungan = $request->nilai_keuntungan;
        $permohonan->nilai_kredit = $request->nilai_kredit;
        $permohonan->masa = $request->masa;
        $permohonan->nilai_cicilan = $request->nilai_cicilan;
        $permohonan->save();

        return response()->json([
            'message' => 'Data Permohonan Tersimpan',
            'Data' => $permohonan
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return Permohonan::find($id);
        $permohonan = Permohonan::find($id);
        return $permohonan;
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
        $permohonan = Permohonan::find($id);
        $permohonan->update($request->all());
        return $permohonan;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permohonan = Permohonan::destroy($id);
        return response(['Data Berhasil Dihapus']);
    }

    public function search($nama_pemohon)
    {
        return Permohonan::where('nama_pemohon' , 'like', '%'.$nama_pemohon.'%')->get();
    }
}
