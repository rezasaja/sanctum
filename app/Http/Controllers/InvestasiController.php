<?php

namespace App\Http\Controllers;
use App\Models\Investasi;

use Illuminate\Http\Request;

class InvestasiController extends Controller
{
    public function index()
    {
        $investasi = Investasi::paginate(5);
        return $investasi;
    }

    public function store()
    {
        $investasi = $this->save();
        return $investasi;
    }

    public function update($id)
    {
        $investasi = $this->save($id);
        return $investasi;
    }

    public function save($id = null)
    {
        if($id){
            $investasi = Investasi::find($id);
        }else{
            $investasi = new Investasi;
        }
        $investasi->jenis = request()->jenis;
        $investasi->nomor = request()->nomor;
        $investasi->user_id = request()->user_id;
        $investasi->nama_depan = request()->nama_depan;
        $investasi->nama_belakang = request()->nama_belakang;
        $investasi->nama_instansi = request()->nama_instansi;
        $investasi->tanggal_pembukaan = request()->tanggal_pembukaan;
        $investasi->saldo = request()->saldo;
        $investasi->aktif = request()->aktif;
        $investasi->user_created = request()->user_created;
        $investasi->user_updated = request()->user_updated;
        $investasi->user_deleted = request()->user_deleted;
        $investasi->save();

        return response()->json([
            'message' => 'Data Di Simpan',
            'date' => $investasi
        ], 201);
    }

    public function destroy($id)
    {
        $investasi = Investasi::find($id);
        $investasi->delete();
        return response([
            'message' => 'Data Sudah Di Hapus'
        ]);
    }

    public function search($jenis)
    {
        $investasi = Investasi::where('jenis', 'like', '%'.$jenis.'%')->get();
        return $investasi;

    }
}
