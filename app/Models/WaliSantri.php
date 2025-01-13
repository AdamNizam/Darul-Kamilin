<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliSantri extends Model
{
    use HasFactory;

    protected $table = 'wali_santris';

    protected $fillable = [
        'id',
        'nama_ayah',
        'nama_ibu',
        'no_hp',
    ];

    public function santris()
    {
        return $this->hasMany(Santri::class);
    }
}
