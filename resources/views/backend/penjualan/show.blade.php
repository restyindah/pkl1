@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan data artikel</div>
                <div class="card-body">

        <div class="form-group">
            <label for="">bukuid</label>
            <input class="form-control" value="{{ $penjualan->bukuid }}" type="text" name="bukuid" disabled>
        </div>

        <div class="form-group">
            <label for="">kasirid</label>
            <input class="form-control" value="{{ $penjualan->kasirid }}" type="text" name="kasirid" disabled>
        </div>

        <div class="form-group">
            <label for="">jumlah</label>
            <input class="form-control" value="{{ $penjualan->jumlah }}" type="text" name="jumlah" disabled>
        </div>

        <div class="form-group">
            <label for="">total</label>
            <input class="form-control" value="{{ $penjualan->total }}" type="text" name="total" disabled>
        </div>

        <div class="form-group">
            <label for="">tanggal</label>
            <input class="form-control" value="{{ $penjualan->tanggal }}" type="text" name="tanggal" disabled>
        </div>