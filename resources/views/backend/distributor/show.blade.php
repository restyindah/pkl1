@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan data artikel</div>
                <div class="card-body">

        <div class="form-group">
            <label for="">Nama_distributor</label>
            <input class="form-control" value="{{ $distributor->nama }}" type="text" name="nama" disabled>
        </div>

        <div class="form-group">
            <label for="">alamat</label>
            <input class="form-control" value="{{ $distributor->alamat }}" type="text" name="alamat" disabled>
        </div>

        <div class="form-group">
            <label for="">telepon</label>
            <input class="form-control" value="{{ $distributor->telepon }}" type="text" name="telepon"  disabled>
        </div>