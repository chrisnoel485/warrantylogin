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
                                    {{ Form::label('kp', 'KP') }}
                                    {{ Form::select('kp', ['kp1'=>'kp1', 'kp2'=>'kp2','kp3'=>'kp3', 'dev1'=>'dev1','dev3'=>'dev3'], null,
                                        ['class'=>'form-control']) }}        
                                </div>
                                <div class="form-group">
                                    {{ Form::label('merek', 'Merek') }}
                                    {{ Form::select('merek', ['lenovo'=>'lenovo', 'hp'=>'hp'], null,
                                        ['class'=>'form-control']) }}         
                                </div>
                                <div class="form-group">
                                    {{ Form::label('expired', 'Expired Warranty Server') }}
                                    {{ Form::text('expired', '', ['class'=>'form-control', 'placeholder'=>'Masukkan Expired Warranty Server']) }}
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