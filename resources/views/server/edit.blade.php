@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Server</h3>
                    </div>
                    @foreach($servers as $p)
                    <form action="/server/update" method="post">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">  
                            <input type="hidden" name="id" value="{{ $p->id }}">
                                <div class="form-group">
			                        <label for="hostname">Hostname Server</label>
			                        <input value="{{ $p->hostname }}" type="text" name="hostname" placeholder="Masukkan Hostname Server" class="form-control" >
		                        </div>
                                <div class="form-group">
			                        <label for="sn">Serial Number Server</label>
			                        <input value="{{ $p->sn }}" type="text" name="sn" placeholder="Masukkan Serial Number Server" class="form-control" >
		                        </div>
                                <div class="form-group">
			                        <label for="tahun_pembelian">Tahun Pembelian Server</label>
			                        <input value="{{ $p->tahun }}" type="text" name="tahun_pembelian" placeholder="Masukkan Tahun Pembelian Server" class="form-control" >
		                        </div>
                            </div>
                            <div class="col-md-6">  
                                <div class="form-group">
			                        <label for="kp">KP</label>
                                    <div>
                                    <select id="kp" name="kp" class="form-control">
                                        <option value="KP1" {{ $p->kp =='KP1'?'selected':'' }}>KP1</option>
                                        <option value="KP2" {{ $p->kp =='KP2'?'selected':'' }}>KP2</option>
                                        <option value="KP3" {{ $p->kp =='KP3'?'selected':'' }}>KP3</option>
                                        <option value="DEV1" {{ $p->kp =='DEV1'?'selected':'' }}>DEV1</option>
                                        <option value="DEV3" {{ $p->kp =='DEV3'?'selected':'' }}>DEV3</option>
                                    </select>
                                    </div>
			                    </div>
                                <div class="form-group">
			                        <label for="merek">Merek Server</label>
                                    <div>
                                    <select id="merek" name="merek"class="form-control">
                                        <option value="HP" {{ $p->merek =='HP'?'selected':'' }}>HP</option>
                                        <option value="Lenovo" {{ $p->merek =='Lenovo'?'selected':'' }}>Lenovo</option>
                                    </select>
                                    </div>
			                    </div>
                                <div class="form-group">
			                        <label for="expired">Tahun Expired Warranty Server</label>
			                        <input value="{{ $p->expired}}" type="text" name="expired" placeholder="Masukkan Tahun Expired Warranty Server" class="form-control" >
		                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ URL::to('server') }}" class="btn btn-outline-info">Kembali</a>
                        <input type="submit" value="Simpan" class="btn btn-primary pull-right">
                    </div>
                    </form>
                    @endforeach
                </div>
        </div>
    </div>
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection