<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public function magazines()
    {
        return $this->hasMany(Magazine::class);
    }
}
