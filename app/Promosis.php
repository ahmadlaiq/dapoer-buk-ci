<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promosis extends Model
{
    
    protected $fillable = [
        'produk', 'sebelum_promosi', 'sesudah_promosi', 'diskon', 'gambar'
    ];

}
