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
							<td>{{ $p->warranties->tahun_pembelian }}</td>
                            <td>{{ $p->warranties->expired_warranty }}</td>
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