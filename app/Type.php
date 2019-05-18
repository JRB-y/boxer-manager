<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function boxers()
    {
        return $this->belongsToMany(Boxer::class);
    }
}
