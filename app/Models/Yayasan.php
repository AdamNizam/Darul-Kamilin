<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yayasan extends Model
{
    use HasFactory;

    protected $table = 'yayasans';

    protected $fillable = [
        'nama_yayasan',
        'alamat',
        'telepon',
        'email',
        'sejarah_yayasan',
        'deskripsi_yayasan',
        'logo',
        'benner',
        'thumbnail_satu',
        'thumbnail_dua',
        'thumbnail_tiga',
        'link_satu',
        'link_dua'
    ];
}
