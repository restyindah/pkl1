<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['judul', 'noisbn', 'pennulis', 'penerbit', 'tahun', 'stok', 'harga_pokok', 'harga_jual', 'diskon'];

    public $timestamps = true;
}
