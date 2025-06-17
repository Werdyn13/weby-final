<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produkt extends Model
{
    protected $table = 'produkt';

    protected $primaryKey = 'idprodukt';

    protected $fillable = ['nazev', 'popis', 'cena', 'obrazek', 'cislo_kategorie'];

    public $timestamps = false;

    public function getNameAttribute()
    {
        return $this->nazev;
    }

    public function kategorie()
    {
        return $this->belongsTo(Kategorie::class, 'cislo_kategorie');
    }
}
