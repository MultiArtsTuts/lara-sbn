<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "client";
    
    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
