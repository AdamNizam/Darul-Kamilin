<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $table = 'santris';

    protected $fillable = [
        'nama',
        'gambar',
        'alamat',
        'jenis_kelamin',
        'tempat_tgl',
        'tingkat_pendidikan',
        'wali_santri_id',
    ];

    public function waliSantri()
    {
        return $this->belongsTo(WaliSantri::class);
    }
    public function tunggakan()
    {
        return $this->hasMany(TunggakanSantri::class); // Jika satu santri memiliki banyak tunggakan
    }
}
