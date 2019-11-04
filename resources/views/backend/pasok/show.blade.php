@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan data artikel</div>
                <div class="card-body">

        <div class="form-group">
            <label for="">jumlah</label>
            <input class="form-control" value="{{ $pasok->nama }}" type="text" name="jumlah" disabled>
        </div>

        <div class="form-group">
            <label for="">tanggal</label>
            <input class="form-control" value="{{ $pasok->alamat }}" type="text" name="tanggal" disabled>
        </div>