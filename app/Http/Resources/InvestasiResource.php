<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvestasiResource extends JsonResource
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
            'jenis' => $this->jenis,
            'nomor' => $this->nomor,
            'user_id' => $this->user_id,
            'nama_depan' => $this->nama_depan,
            'nama_belakang' => $this->nama_belakang,
            'nama_instansi' => $this->nama_instansi,
            'tanggal_pembukaan' => $this->tanggal_pembukaan,
            'saldo' => $this->saldo,
            'aktif' => $this->aktif,
            'user_created' => $this->user_created,
            'user_updated' => $this->user_updated,
            'user_deleted' => $this->user_deleted,
        ];
    }
}
