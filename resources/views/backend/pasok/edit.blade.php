@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">mengubah data</div>
        <div class="card-body">
            <form action="{{ route('pasok.update',$pasok->id)}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PATCH">
            

            @csrf
            
              <div class="form.group">
                <label for="">jumlah</label>
                <input type="text" class="form-control " value="{{ $pasok->nama_distributor }}" name="jumlah" required>
            </div> 

            <div class="form.group">
                <label for="">tanggal</label>
                <input type="text" class="form-control " value="{{ $pasok->alamat }}" name="tanggal" required>
            </div> 


           <button type="submit" class="btn btn-md btn-info">Simpan</button>
           <a name="" class="btn btn-md btn-warning" href="{{ route('pasok.index')}}" role="button">kembali</a>
            </form>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection