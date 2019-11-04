<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = ['bukus_id', 'kasirs_id', 'jumlah', 'total', 'tanggal'];

    public $timestamps = true;
}
