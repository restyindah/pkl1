@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">mengubah data</div>
        <div class="card-body">
            <form action="{{ route('distributor.update',$distributor->id)}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PATCH">
            

            @csrf

              <div class="form.group">
                <label for="">nama_distributor</label>
                <input type="text" class="form-control " value="{{ $distributor->nama_distributor }}" name="nama_distributor" required>
            </div> 

            <div class="form.group">
                <label for="">alamat</label>
                <input type="text" class="form-control " value="{{ $distributor->alamat }}" name="alamat" required>
            </div> 

            <div class="form.group">
                <label for="">telepon</label>
                <input type="text" class="form-control " value="{{ $distributor->telepon }}" name="telepon" required>
            </div> 

           <button type="submit" class="btn btn-md btn-info">Simpan</button>
           <a name="" class="btn btn-md btn-warning" href="{{ route('distributor.index')}}" role="button">kembali</a>
            </form>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection