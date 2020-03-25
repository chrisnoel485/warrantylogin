@extends('adminlte::page')

@section('content')
<div class="row">
<div class="col-lg-2">
    <a href="{{ route('server.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Transaksi</a>
  </div>
    <div class="col-lg-12">
                  @if (Session::has('message'))
                  <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                  @endif
                  </div>
</div>
<div class="row" style="margin-top: 20px;">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <h4 class="card-title">Data Server</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            Serial Number Server
                          </th>
                          <th>
                            Hostname Server
                          </th>
                          <th>
                            KP
                          </th>
                          <th>
                            Merek Server
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr>
                            <td class="py-1">
                                {{$data->id}}
                                </a>
                            </td>
                            <td>
                                {{$data->id}}
                            </td>
                            <td>
                                {{$data->kps->kp}}
                            </td>
                            <td>
                                {{$data->mereks->merek}}
                            </td>
                            <td>
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                                        <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                                        </button>
                                
                                    </div>
                                </div>
                            </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
               {{--  {!! $datas->links() !!} --}}
                </div>
              </div>
            </div>
          </div>
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection