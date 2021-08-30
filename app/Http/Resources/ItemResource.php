<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
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
            'kredit_nasabah_id' => $this->kredit_nasabah_id,
            'item' => $this->item,
            'tanggal' => $this->tanggal,
            'tanggal_bayar' => $this->tanggal_bayar,
            'nilai_harga_barang' => $this->nilai_harga_barang,
            'nilai_uang_muka' => $this->nilai_uang_muka,
            'nilai_keuntungan' => $this->nilai_keuntungan,
            'nilai_kredit_item' => $this->nilai_kredit_item,
            'pilihan' => $this->pilihan,
            'masa' => $this->masa,
            'nilai_cicilan' => $this->nilai_cicilan,
            'tanggal_jatuh_tempo' => $this->tanggal_jatuh_tempo,
            'outstanding_kredit' => $this->outstanding_kredit,
            'outstanding_masa' => $this->outstanding_masa,
            'status' => $this->status,
            'user_id' => $this->user_id,
            'agen_id' => $this->agen_id,
        ];
    }
}
