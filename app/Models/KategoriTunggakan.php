<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriTunggakan extends Model
{
    use HasFactory;

    protected $table = 'kategori_tunggakans';

    protected $fillable = [
        'nama',
        'jumlah',
    ];
}
