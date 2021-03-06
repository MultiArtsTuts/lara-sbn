<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Client extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'phone' => $this->phone,
            'endereco' => $this->endereco,
        ];
    }
}
