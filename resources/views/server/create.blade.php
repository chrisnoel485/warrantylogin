@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Server</h3>
                    </div>
                    <form action="/server/store" method="post">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">  
                                <div class="form-group">
			                        <label for="hostname">Hostname Server</label>
			                        <input type="text" name="hostname" placeholder="Masukkan Hostname Server" class="form-control" >
		                        </div>
                                <div class="form-group">
			                        <label for="sn">Serial Number Server</label>
			                        <input type="text" name="sn" placeholder="Masukkan Serial Number Server" class="form-control" >
		                        </div>
                                <div class="form-group">
			                        <label for="tahun_pembelian">Tahun Pembelian Server</label>
			                        <input type="text" name="tahun_pembelian" placeholder="Masukkan Tahun Pembelian Server" class="form-control" >
		                        </div>
                            </div>
                            <div class="col-md-6">  
                                <div class="form-group">
			                        <label for="kp">KP</label>
                                    <div>
                                    <select id="kp" name="kp" class="form-control">
                                        <option value="KP1">KP1</option>
                                        <option value="KP2">KP2</option>
                                        <option value="KP3">KP3</option>
                                        <option value="DEV1">DEV1</option>
                                        <option value="DEV3">DEV3</option>
                                    </select>
                                    </div>
			                    </div>
                                <div class="form-group">
			                        <label for="merek">Merek Server</label>
                                    <div>
                                    <select id="merek" name="merek"class="form-control">
                                        <option value="HP">HP</option>
                                        <option value="Lenovo">Lenovo</option>
                                    </select>
                                    </div>
			                    </div>
                                <div class="form-group">
			                        <label for="expired">Tahun Expired Warranty Server</label>
			                        <input type="text" name="expired" placeholder="Masukkan Tahun Expired Warranty Server" class="form-control" >
		                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ URL::to('server') }}" class="btn btn-outline-info">Kembali</a>
                        <input type="submit" value="Proses" class="btn btn-primary pull-right">
                    </div>
                    </form>
                </div>
        </div>
    </div>
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection