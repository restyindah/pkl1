<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $fillable = ['nama', 'alamat', 'telepon', 'status', 'username', 'password', 'akses'];

    public $timestamps = true;
}
