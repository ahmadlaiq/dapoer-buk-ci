<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Varians extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_varian'
    ];

    public function produks()
    {
        return $this->hasMany('App\Produks');
    }
}
