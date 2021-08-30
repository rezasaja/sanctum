<?php

namespace Services;

use App\Models\Item;

class ItemService
{
    public function getPaginate($page = 10)
    {
        return Item::paginate($page);
    }

    public function getAll()
    {
        return Item::get();
    }

    public function find($uuid)
    {
        $item = Item::findByUuid($uuid)->first();
        if($item) return $item;
        else return ['data' => 'not found'];
    }

    public function save($uuid = null)
    {
        if($uuid){
            $item = $this->find($uuid);
        }else{
            $item = new Item;
        }
        $item->kredit_nasabah_id = request()->kredit_nasabah_id;
        $item->item = request()->item;
        $item->tanggal = request()->tanggal;
        $item->tanggal_bayar = request()->tanggal_bayar;
        $item->nilai_harga_barang = request()->nilai_harga_barang;
        $item->nilai_uang_muka = request()->nilai_uang_muka;
        $item->nilai_keuntungan = request()->nilai_keuntungan;
        $item->nilai_kredit_item = request()->nilai_kredit_item;
        $item->pilihan = request()->pilihan;
        $item->masa = request()->masa;
        $item->nilai_cicilan = request()->nilai_cicilan;
        $item->tanggal_jatuh_tempo = request()->tanggal_jatuh_tempo;
        $item->outstanding_kredit = request()->outstanding_kredit;
        $item->outstanding_masa = request()->outstanding_masa;
        $item->status = request()->status;
        $item->user_id = request()->user_id;
        $item->agen_id = request()->agen_id;
        $item->save();

        return $item;
    }

    public function delete($uuid)
    {
        $item = Item::findByUUid($uuid)->first();
        if($item){
            $item->delete();
            return $item;
        }
        return ['data' => 'not found'];
    }

}
