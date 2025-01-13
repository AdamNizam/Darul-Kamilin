<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';

    protected $fillable = [
        'tanggal_pembayaran',
        'bukti_pembayaran',
        'metode_pembayaran',
        'tunggakan_santri_id',
        'bulan',
        'nama',
        'status',
    ];

    public function tunggakanSantri()
    {
        return $this->belongsTo(TunggakanSantri::class, 'tunggakan_santri_id');
    }
}
