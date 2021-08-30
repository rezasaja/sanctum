<?php

namespace Services;

use App\Models\Nasabah;

class NasabahService
{
    public function getPaginate($page = 10)
    {
        return Nasabah::paginate($page);
    }

    public function getAll()
    {
        return Nasabah::get();
    }

    public function find($uuid)
    {
        $nasabah = Nasabah::findByUuid($uuid)->first();
        if($nasabah) return $nasabah;
        else return ['data' => 'not found'];
    }

    public function save($uuid = null)
    {
        if($uuid){
            $nasabah = $this->find($uuid);
        }else{
            $nasabah = new Nasabah;
        }
        $nasabah->user_id = request()->user_id;
        $nasabah->jenis = request()->jenis;
        $nasabah->nomor = request()->nomor;
        $nasabah->identitas_jenis = request()->identitas_jenis;
        $nasabah->identitas_nomor = request()->identitas_nomor;
        $nasabah->nama_depan = request()->nama_depan;
        $nasabah->nama_belakang = request()->nama_belakang;
        $nasabah->nama_instansi = request()->nama_instansi;
        $nasabah->jenis_kelamin = request()->jenis_kelamin;
        $nasabah->lahir_tempat = request()->lahir_tempat;
        $nasabah->lahir_tanggal = request()->lahir_tanggal;
        $nasabah->nama_ibu = request()->nama_ibu;
        $nasabah->alamat_identitas = request()->alamat_identitas;
        $nasabah->alamat_domisili = request()->alamat_domisili;
        $nasabah->nomor_kontak = request()->nomor_kontak;
        $nasabah->aktif = request()->aktif;
        $nasabah->save();

        return $nasabah;
    }

    public function delete($uuid)
    {
        $nasabah = Nasabah::findByUuid($uuid)->first();
        if($nasabah){
            $nasabah->delete();
            return $nasabah;
        }
        return ['data' => 'not found'];

    }
}
