@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan data artikel</div>
                <div class="card-body">

        <div class="form-group">
            <label for="">nama</label>
            <input class="form-control" value="{{ $kasir->nama }}" type="text" name="nama" disabled>
        </div>

        <div class="form-group">
            <label for="">alamat</label>
            <input class="form-control" value="{{ $kasir->alamat }}" type="text" name="alamat" disabled>
        </div>

        <div class="form-group">
            <label for="">telepon</label>
            <input class="form-control" value="{{ $kasir->telepon }}" type="text" name="telepon" disabled>
        </div>

        <div class="form-group">
            <label for="">status</label>
            <input class="form-control" value="{{ $kasir->status }}" type="text" name="status" disabled>
        </div>

        <div class="form-group">
            <label for="">username</label>
            <input class="form-control" value="{{ $kasir->username }}" type="text" name="username" disabled>
        </div>

        <div class="form-group">
            <label for="">password</label>
            <input class="form-control" value="{{ $kasir->password }}" type="text" name="password" disabled>
        </div>

        <div class="form-group">
            <label for="">akses</label>
            <input class="form-control" value="{{ $kasir->akses }}" type="text" name="akses" disabled>
        </div>