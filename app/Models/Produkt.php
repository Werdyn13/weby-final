<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produkt extends Model
{
    protected $table = 'produkt';

    protected $fillable = ['nazev'];

    public function getNameAttribute()
    {
        return $this->nazev;
    }
}
