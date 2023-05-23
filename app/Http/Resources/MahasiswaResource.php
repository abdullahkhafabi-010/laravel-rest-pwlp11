<?php

namespace App\Http\Resources;

// use Illuminate\Http\Request;
use App\Http\Request\StoreMahasiswaRequests;
use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'Nim'=> $this -> Nim,
            'Nama'=> $this -> Nama,
            'Tanggal_Lahir' => $this -> Tanggal_Lahir,
            'Jurusan' => strtoupper($this -> Jurusan),
            'No_Handphone' => $this -> No_Handphone,
            'Email' => $this -> Email,
            'Kelas' => $this -> kelas_id,
        ];
    }
}
