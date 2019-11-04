@extends('layouts.backend')

@section('css')
        <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('js')
        <script src="{{asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('assets/backend/assets/js/components/datatables-init.js')}}"></script>
@endsection

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Tables Distributor</h5><br>
                <center>
                        <a href="{{ route('distributor.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>alamat</th>
                                <th>telepon</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                                @php $no = 1;  @endphp
                            @foreach ($distributor as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama_distributor}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->telepon}}</td>
                         
                                   <td style="text-align: center;">
                                    <form action="{{route('distributor.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('distributor.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                    </a>
                                    
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
									</form>
								</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection