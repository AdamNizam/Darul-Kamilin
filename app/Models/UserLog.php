<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class UserLog extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user_logs';

    protected $fillable = [
        'username',
        'password',
        'wali_santri_id',
    ];

    protected $hidden = [
        'password',
    ];

    // Relasi ke tabel wali_santri
    public function waliSantri()
    {
        return $this->belongsTo(WaliSantri::class);
    }
}
