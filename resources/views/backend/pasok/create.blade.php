@extends('layouts.backend')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="crad.header">Membuat Data Pasok</div>
                    <div class="card-body">
                        <form action="{{ route('pasok.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="">jumlah</label>
                            <input class="form-control" type="text" name="jumlah">
                        </div>

                        <div class="form-group">
                            <label for="">tanggal</label>
                            <input class="form-control" type="date" name="tanggal">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                simpan data
                            </button>

                            <div class="form-group">
                                <a href="{{ url('pasok') }}" class="btn btn-outline-info">kembali</a>
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