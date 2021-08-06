<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ongkirs extends Model
{
    protected $fillable = [
        'kecamatan', 'nama_desa', 'biaya'
    ];
}
