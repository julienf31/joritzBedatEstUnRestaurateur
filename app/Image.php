<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function recette()
    {
        return $this->belongsTo(Recette::class);
    }
}
