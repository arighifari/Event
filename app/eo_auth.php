<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class eo_auth extends Authenticatable
{
    protected $fillable = [
        'email', 'password', 'nama', 'no_telp', 'alamat'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
