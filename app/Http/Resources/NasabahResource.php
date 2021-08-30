<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NasabahResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'user_id' => $this->user_id,
            'jenis' => $this->jenis,
            'nomor' => $this->nomor,
            'identitas_jenis' => $this->identitas_jenis,
            'identitas_nomor' => $this->identitas_nomor,
            'nama_depan' => $this->nama_depan,
            'nama_belakang' => $this->nama_belakang,
            'nama_instansi' => $this->nama_instansi,
            'jenis_kelamin' => $this->jenis_kelamin,
            'lahir_tempat' => $this->lahir_tempat,
            'lahir_tanggal' => $this->lahir_tanggal,
            'nama_ibu' => $this->nama_ibu,
            'alamat_identitas' => $this->alamat_identitas,
            'alamat_domisili' => $this->alamat_domisili,
            'nomor_kontak' => $this->nomor_kontak,
            'aktif' => $this->aktif,
        ];
    }
}
