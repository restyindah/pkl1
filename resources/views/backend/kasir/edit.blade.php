@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">mengubah data</div>
        <div class="card-body">
            <form action="{{ route('kasir.update',$kasir->id)}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PATCH">
            

            @csrf

              <div class="form.group">
                <label for="">nama</label>
                <input type="text" class="form-control " value="{{ $kasir->nama }}" name="nama" required>
            </div> 

            <div class="form.group">
                <label for="">alamat</label>
                <input type="text" class="form-control " value="{{ $kasir->alamat }}" name="alamat" required>
            </div> 
 
            <div class="form.group">
                <label for="">telepon</label>
                <input type="text" class="form-control " value="{{ $kasir->telepon }}" name="telepon" required>
            </div> 

            <div class="form.group">
                <label for="">status</label>
                <input type="text" class="form-control " value="{{ $kasir->status }}" name="status" required>
            </div> 

            <div class="form.group">
                <label for="">username</label>
                <input type="text" class="form-control " value="{{ $kasir->username }}" name="username" required>
            </div> 

            <div class="form.group">
                <label for="">password</label>
                <input type="text" class="form-control " value="{{ $kasir->password }}" name="password" required>
            </div>
            
            <div class="form.group">
                <label for="">akses</label>
                <input type="text" class="form-control " value="{{ $kasir->akses }}" name="akses" required>
            </div> 


           <button type="submit" class="btn btn-md btn-info">Simpan</button>
           <a name="" class="btn btn-md btn-warning" href="{{ route('kasir.index')}}" role="button">kembali</a>
            </form>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection