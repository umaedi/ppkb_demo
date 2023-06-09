<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Tbl_user_tpk extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'tpk';

    protected $table = 'tbl_user_tpk';

    protected $primaryKey = 'id';

    protected $fillable = [
        'wilayah_id',
        'nama',
        'jabatan',
        'no_telp',
        'alamat',
        'email',
        'avatar',
        'password',
        'device_token',
        'token_reset',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
