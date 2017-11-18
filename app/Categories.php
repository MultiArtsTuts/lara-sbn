<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function client()
    {
        return $this->hasMany(Client::class);
    }
}
