<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::paginate(5);
        return $transaksi;
    }

    public function store(Request $request)
    {
        $transaksi = new Transaksi;
        $transaksi->kredit_item_id = $request->kredit_item_id;
        $transaksi->pembayaran = $request->pembayaran;
        $transaksi->pembayaran_metode = $request->pembayaran_metode;
        $transaksi->pembayaran_tanggal = $request->pembayaran_tanggal;
        $transaksi->pembayaran_nominal = $request->pembayaran_nominal;
        $transaksi->pembayaran_sisa = $request->pembayaran_sisa;
        $transaksi->deskripsi = $request->deskripsi;
        $transaksi->catatan = $request->catatan;
        $transaksi->user_id = $request->user_id;
        $transaksi->save();

        return response()->json([
            'message' => 'Transaksi Tersimpan',
            'Data' => $transaksi
        ]);
    }

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->all());
        return $transaksi;
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::destroy($id);
        return response()->json(['Tansaksi Di Hapus']);
    }

    public function show($id)
    {
        $transaksi = Transaksi::find($id);
        return $transaksi;
    }

    public function search($pembayaran_metode)
    {
        $transaksi = Transaksi::where('pembayaran_metode', 'like', '%'.$pembayaran_metode.'%')->get();
        return $transaksi;
    }
}
