<?php

namespace App\Http\Resources;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'username'=>$this['user']->username,
            'nama'=>$this['user']->name,
            'token'=>$this['token'],
        ];
    }
}
