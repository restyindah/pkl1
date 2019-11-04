@extends('layouts.backend')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="crad.header">Membuat Data Buku</div>
                    <div class="card-body">
                        <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="">judul</label>
                            <input class="form-control" type="text" name="judul">
                        </div>

                        <div class="form-group">
                            <label for="">penulis</label>
                            <input class="form-control" type="text" name="penulis">
                        </div>
 
                        <div class="form-group">
                            <label for="">penerbit</label>
                            <input class="form-control" type="text" name="penerbit">
                        </div>

                        <div class="form-group">
                            <label for="">tahun</label>
                            <input class="form-control" type="date" name="tahun">
                        </div>

                        <div class="form-group">
                            <label for="">stok</label>
                            <input class="form-control" type="text" name="stok">
                        </div>


                        <div class="form-group">
                            <label for="">hargapokok</label>
                            <input class="form-control" type="text" name="hargapokok">
                        </div>

                        <div class="form-group">
                            <label for="">hargajual</label>
                            <input class="form-control" type="text" name="hargajual">
                        </div>

                        <div class="form-group">
                            <label for="">diskon</label>
                            <input class="form-control" type="text" name="diskon">
                        </div>


                            <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                simpan data
                            </button>

                            <div class="form-group">
                                <a href="{{ url('buku') }}" class="btn btn-outline-info">kembali</a>
                            </div>
                        </div>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection