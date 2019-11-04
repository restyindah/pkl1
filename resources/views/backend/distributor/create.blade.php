@extends('layouts.app')

@section('content')
<div class="cintainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="crad.header"Membuat Data Distributor</div>
                    <div class="card-body">
                        <form action="{{ route('distributor.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="">nama distributor</label>
                            <input class="form-control" type="text" name="nama_distributor">
                        </div>

                        <div class="form-group">
                            <label for="">alamat</label>
                            <input class="form-control" type="text" name="alamat">
                        </div>

                        <div class="form-group">
                            <label for="">telepon</label>
                            <input class="form-control" type="text" name="telepon">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                simpan data
                            </button>

                            <div class="form-group">
                                <a href="{{ url('distributor') }}" class="btn btn-outline-info">kembali</a>
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