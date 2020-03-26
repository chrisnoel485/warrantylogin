@extends('adminlte::page')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Server</h3>
                <div class="card-tools">
                 <a href="{{ URL::to('/server/create')}}" class="btn btn-tool">
                     <i class="fa fa-plus"></i>
                     &nbsp; Add
                 </a>
             </div>
         </div>
         <div class="card-body">
            @if (Session::has('message'))
            <div id="alert-msg" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ Session::get('message') }}
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>Hostname</th>
                                <th>Serial Number</th>
                                <th>KP</th>
                                <th>Merek</th>
                                <th>Tahun Pembelian</th>
                                <th>Expired Warranty</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($server as $server)
                            <tr>
                                <td class="text-center">{{ $server->hostname }}</td>
                                <td>{{ $server->sn }}</td>
                                <td>{{ $server->kp }}</td>
                                <td>{{ $server->merek }}</td>
                                <td>{{ $server->tahun }}</td>
                                <td>{{ $server->expired }}</td>
                                <td class="text-center">
                                    <a class="btn btn-success" href="/server/edit/{{ $server->id }}"><i class="fa fa-trash"></i></a>
                                  | 
		                            <a class="btn btn-danger" href="/server/hapus/{{ $server->id }}"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
 
 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
 
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection