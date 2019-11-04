@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan data artikel</div>
                <div class="card-body"></div>


        <div class="form-group">
            <label for="">judul</label>
            <input class="form-control" value="{{ $buku->judul }}" type="text" name="judul" disabled>
        </div>

        <div class="form-group">
            <label for="">penulis</label>
            <input class="form-control" value="{{ $buku->penulis }}" type="text" name="penulis"  disabled>
        </div>

        <div class="form-group">
            <label for="">penerbit</label>
            <input class="form-control" value="{{ $buku->penulis }}" type="text" name="penerbit"  disabled>
        </div>

        <div class="form-group">
            <label for="">tahun</label>
            <input class="form-control" value="{{ $buku->penulis }}" type="text" name="tahun"  disabled>
        </div>

        <div class="form-group">
            <label for="">stok</label>
            <input class="form-control" value="{{ $buku->penulis }}" type="text" name="stok"  disabled>
        </div>

        <div class="form-group">
            <label for="">hargapokok</label>
            <input class="form-control" value="{{ $buku->penulis }}" type="text" name="hargapokok"  disabled>
        </div>

        <div class="form-group">
            <label for="">hargajual</label>
            <input class="form-control" value="{{ $buku->penulis }}" type="text" name="hargajual"  disabled>
        </div>
        
        <div class="form-group">
            <label for="">diskon</label>
            <input class="form-control" value="{{ $buku->penulis }}" type="text" name="diskon"  disabled>
        </div>