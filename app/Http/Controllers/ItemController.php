<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class ItemController extends Controller
{
    public function index()
    {
        $item = Item::paginate(5);
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Item;
        $item->kredit_nasabah_id = $request->kredit_nasabah_id;
        $item->item = $request->item;
        $item->tanggal = $request->tanggal;
        $item->tanggal_bayar = $request->tanggal_bayar;
        $item->nilai_harga_barang = $request->nilai_harga_barang;
        $item->nilai_uang_muka = $request->nilai_uang_muka;
        $item->nilai_keuntungan = $request->nilai_keuntungan;
        $item->nilai_kredit_item = $request->nilai_kredit_item;
        $item->pilihan = $request->pilihan;
        $item->masa = $request->masa;
        $item->nilai_cicilan = $request->nilai_cicilan;
        $item->tanggal_jatuh_tempo = $request->tanggal_jatuh_tempo;
        $item->outstanding_kredit = $request->outstanding_kredit;
        $item->outstanding_masa = $request->outstanding_masa;
        $item->status = $request->status;
        $item->user_id = $request->user_id;
        $item->agen_id = $request->agen_id;
        $item->save();

        return response()->json([
            'message' => 'Item Berhasil Disimpan',
            'Data' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        $item = Item::destroy($id);
        return response()->json([
            'message' => 'Berhasil Di Hapus'
        ]);
    }

    public function search($item)
    {
        $item = Item::where('item', 'like', '%'.$item.'%')->get();
        return $item;
    }

    public function show($id)
    {
        $item = Item::Find($id);
        return $item;
    }
}
