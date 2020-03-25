@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-12">
            {{ Form::open() }}
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Barang</h3>
                    </div>
                    <div class="card-body">
                        @if(!empty($errors->all()))
                        <div class="alert alert-danger">
                            {{ Html::ul($errors->all())}}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('hostname', 'Hostname Server') }}
                                    {{ Form::text('hostname', '', ['class'=>'form-control', 'placeholder'=>'Masukkan Hostname Server']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('sn', 'Serial Number Server') }}
                                    {{ Form::text('sn', '', ['class'=>'form-control', 'placeholder'=>'Masukkan Serial Number Server']) }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                 
                                <div class="form-group">
                                    {{ Form::label('kp', 'KP') }}
                                    {{ Form::select('kp', ['kp1'=>'kp1', 'kp2'=>'kp2'],'kp3'=>'kp3', 'dev1'=>'dev1'],'dev3'=>'dev3'], null,
                                        ['class'=>'form-control']) }}        
                                </div>
                                <div class="form-group">
                                    {{ Form::label('merek', 'Merek') }}
                                    {{ Form::select('merek', ['lenovo'=>'lenovo', 'hp'=>'hp'], null,
                                        ['class'=>'form-control']) }}         
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('tahun_pembelian', 'Tahun Pembelian') }}
                                    {{ Form::text('tahun_pembelian', '', ['class'=>'form-control', 'placeholder'=>'Masukkan Tahun Pembelian Server']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('expired', 'Expired Warranty Server') }}
                                    {{ Form::text('expired', '', ['class'=>'form-control', 'placeholder'=>'Masukkan Expired Warranty Server']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ URL::to('server/index') }}" class="btn btn-outline-info">Kembali</a>
                        {{ Form::submit('Proses', ['class' => 'btn btn-primary pull-right']) }}
                    </div>
                </div>
            <!-- </form> -->
            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection