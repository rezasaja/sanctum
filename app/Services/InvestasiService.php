<?php

namespace Services;

use App\Models\Investasi;

class InvestasiService
{
    public function getPaginate($page = 10)
    {
        return Investasi::paginate($page);
    }

    public function getAll()
    {
        return Investasi::get();
    }

    public function find($uuid)
    {
        $investasi = Investasi::findByUuid($uuid)->first();
        if($investasi) return $investasi;
        else return ['data' => 'not found'];
    }

    public function save($uuid = null)
    {
        if($uuid){
            $investasi = $this->find($uuid);
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

        return $investasi;
    }

    public function delete($uuid)
    {
        $investasi = Investasi::findByUuid($uuid)->first();
        if($investasi){
            $investasi->delete();
            return $investasi;
        }
        return ['data' => 'not found'];
    }
}
