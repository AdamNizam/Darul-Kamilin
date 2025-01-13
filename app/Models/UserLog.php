<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    use HasFactory;

    protected $table = 'user_logs';

    protected $fillable = [
       'username',
       'password',
       'wali_santri_id'
    ];
    protected $hidden = [
        'password',
    ];

    public function waliSantri()

    {
        return $this->belongsTo(WaliSantri::class);
    }
}
