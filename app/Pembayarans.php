<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayarans extends Model
{
    
    protected $fillable = [
        'nama_akun', 'nomor_akun', 'gambar'
    ];

}
