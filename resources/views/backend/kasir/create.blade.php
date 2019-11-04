@extends('layouts.backend')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="crad.header">Membuat Data Kasir</div>
                    <div class="card-body">
                        <form action="{{ route('kasir.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="">nama</label>
                            <input class="form-control" type="text" name="nama">
                        </div>

                        <div class="form-group">
                            <label for="">alamat</label>
                            <input class="form-control" type="text" name="alamat">
                        </div>

                         <div class="form-group">
                            <label for="">telepom</label>
                            <input class="form-control" type="text" name="telepon">
                        </div>

                         <div class="form-group">
                            <label for="">status</label>
                            <input class="form-control" type="text" name="status">
                        </div>

                         <div class="form-group">
                            <label for="">username</label>
                            <input class="form-control" type="text" name="username">
                        </div>

                         <div class="form-group">
                            <label for="">password</label>
                            <input class="form-control" type="text" name="password">
                        </div>

                         <div class="form-group">
                            <label for="">akses</label>
                            <input class="form-control" type="text" name="akses">
                        </div>


                            <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                simpan data
                            </button>

                            <div class="form-group">
                                <a href="{{ url('kasir') }}" class="btn btn-outline-info">kembali</a>
                            </div>
                        </div>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection