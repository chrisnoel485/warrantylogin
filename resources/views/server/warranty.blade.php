@extends('adminlte::page')
@section('content')
<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Serial Number</th>
							<th>Hostname</th>
                            <th>Tahun Pembelian</th>
							<th>Expired Warranty</th>
						</tr>
					</thead>
					<tbody>
						@foreach($server as $p)
						<tr>
							<td>{{ $p->id }}</td>
							<td>{{ $p->hostname }}</td>
						</tr>
						@endforeach
						@foreach ($warranties as $war)
						<tr>
						<td></td>
							{{ $war->tahun_pembelian}}
							{{ $war->expired_warranty}}  
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
    @endsection

@section('css')
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection