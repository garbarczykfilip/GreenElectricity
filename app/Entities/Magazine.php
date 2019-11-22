<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
