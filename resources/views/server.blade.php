<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #23 : Relasi One To One Eloquent</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h3 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h3>
				<h5 class="text-center my-4">Eloquent One To One Relationship</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Hostname</th>
							<th>tahun pembelian</th>
						</tr>
					</thead>
					<tbody>
						@foreach($server as $p)
						<tr>
							<td>{{ $p->hostname }}</td>
							<td>{{ $p->warranty->expired_warranty }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
 
</body>
</html>