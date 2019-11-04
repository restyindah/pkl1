@extends('layouts.backend')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="crad.header">Mengubah Data Buku</div>
        <div class="card-body">
            <form action="{{ route('buku.update',$buku->id)}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PATCH">
            

            @csrf

              <div class="form.group">
                <label for="">judul</label>
                <input type="text" class="form-control " value="{{ $buku->judul }}" name="judul" required>
            </div> 

            <div class="form.group">
                <label for="">penulis</label>
                <input type="text" class="form-control " value="{{ $buku->penulis }}" name="penulis" required>
            </div> 

            <div class="form.group">
                <label for="">penerbit</label>
                <input type="text" class="form-control " value="{{ $buku->penerbit }}" name="penerbit" required>
            </div> 

            <div class="form.group">
                <label for="">tahun</label>
                <input type="text" class="form-control " value="{{ $buku->tahun }}" name="tahun" required>
            </div> 

            <div class="form.group">
                <label for="">stok</label>
                <input type="text" class="form-control " value="{{ $buku->stok }}" name="stok" required>
            </div> 

            <div class="form.group">
                <label for="">hargapokok</label>
                <input type="text" class="form-control " value="{{ $buku->hargapokok }}" name="hargapokok" required>
            </div> 

            <div class="form.group">
                <label for="">hargajual</label>
                <input type="text" class="form-control " value="{{ $buku->hargajual }}" name="hargajual" required>
            </div> 

            <div class="form.group">
                <label for="">diskon</label>
                <input type="text" class="form-control " value="{{ $buku->diskon }}" name="diskon" required>
            </div> 

           <button type="submit" class="btn btn-md btn-info">Simpan</button>
           <a name="" class="btn btn-md btn-warning" href="{{ route('buku.index')}}" role="button">kembali</a>
            </form>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection