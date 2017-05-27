<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5.3 - laravel scout algolia search example</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<style>
		body{
			background-color: #EAE7ED;
		}
	</style>
</head>

<body>

<div class="container">
	<h2>Search using Scout and Algolia</h2><br/>
	<div class="panel panel-white">
	  <div class="panel-heading">List of Post</div>
	  <div class="panel-body">
	    	<form method="GET" action="{{ route('items-lists') }}">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="titlesearch" class="form-control" placeholder="Enter Title For Search" value="{{ old('titlesearch') }}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<button class="btn btn-success">Search</button>
						</div>
					</div>
				</div>
			</form>

			<table class="table table-bordered">
				<thead>
					<th>Id</th>
					<th>Title</th>
					<th>Creation Date</th>
					<th>Updated Date</th>
				</thead>
				<tbody>
					@if($items->count())
						@foreach($items as $key => $item)
							<tr>
								<td>{{ ++$key }}</td>
								<td>{{ $item->title }}</td>
								<td>{{ $item->created_at }}</td>
								<td>{{ $item->updated_at }}</td>
							</tr>
						@endforeach
					@else
						<tr>
							<td colspan="4">There are no data.</td>
						</tr>
					@endif
				</tbody>
			</table>
			{{ $items->links() }}
	  </div>
	</div>

</div>

</body>
</html>