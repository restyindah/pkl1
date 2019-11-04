<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasok extends Model
{
    protected $fillable = ['jumlah', 'tanggal'];

    public $timestamps = true;
}
