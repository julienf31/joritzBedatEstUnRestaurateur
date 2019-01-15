<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    protected $fillable = ['titre', 'description'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recette_ingredients');
    }

    public function cat()
    {
        return $this->belongsTo(Categorie::class,'categorie');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
