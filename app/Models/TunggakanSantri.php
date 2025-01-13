<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TunggakanSantri extends Model
{
    use HasFactory;

    protected $table = 'tunggakan_santris';

    protected $fillable = [
        'santri_id',
        'kategori_tunggakan_id',
        'tahun',
        'January',
        'February',
        'March',
        'April',
         'May',
         'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class, 'santri_id');
    }

    public function kategoriTunggakan()
    {
        return $this->belongsTo(KategoriTunggakan::class, 'kategori_tunggakan_id');
    }


}
