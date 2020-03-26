@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Barang</h3>
                    </div>
                    <form action="/server/store" method="post">
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
                                    <select id="kp" name="kp">
                                        <option value="KP1">KP1</option>
                                        <option value="KP2">KP2</option>
                                        <option value="KP3">KP3</option>
                                        <option value="DEV1">DEV1</option>
                                        <option value="DEV3">DEV3</option>
                                    </select>
			                    </div>
                                <div class="form-group">
			                        <label for="merek">Merek Server</label>
                                    <select id="merek" name="merek">
                                        <option value="HP">HP</option>
                                        <option value="Lenovo">Lenovo</option>
                                    </select>
			                    </div>
                                <div class="form-group">
			                        <label for="expired">Tahun Expired Warranty Server</label>
			                        <input type="text" name="expired" placeholder="Masukkan Tahun Expired Warranty Server" class="form-control" >
		                        </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="card-footer">
                        <a href="{{ URL::to('server/index') }}" class="btn btn-outline-info">Kembali</a>
                        {{ Form::submit('Proses', ['class' => 'btn btn-primary pull-right']) }}
                        <input type="submit" value="Simpan Data">
                    </div>
                </div>
        </div>
    </div>
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection