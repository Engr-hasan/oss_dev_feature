<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Excel!</title>
  </head>
  <body>
  	<div class="container">
  		<h1 class="text-primary text-center">Laravel Excel Import & Export</h1>
  		<h5 class="text-info text-center"><a href="https://www.youtube.com/watch?v=rWjj9Slg1og">Lravel Excel youtube video link</a></h5>
  		<div class="row">
  			<a href="{{url('import-cus-data')}}" class="btn btn-primary btn-sm">Import Data</a>
  			<a href="{{url('export')}}" class="btn btn-info btn-sm">Export Data</a>
  			<a href="{{url('del-cus-data')}}" class="btn btn-danger btn-sm">Delete All Data</a>
  		</div>
  		<div class="row">
  			<table class="table table-bordered table-hover table-striped">
  				<thead>
  					<tr>
  						<th>ID</th>
  						<th>Customer Name</th>
  						<th>Customer Address</th>
  						<th>Customer Mobile</th>
  						<th>Customer Email</th>
  						<th>Products Name</th>
  					</tr>
  				</thead>
  				<tbody>
  					@foreach($cusData as $v_cusData)
						<tr>
							<td>{{ $v_cusData->id }}</td>
							<td>{{ $v_cusData->customer_name }}</td>
							<td>{{ $v_cusData->customer_address }}</td>
							<td>{{ $v_cusData->customer_mobile }}</td>
							<td>{{ $v_cusData->customer_email }}</td>
							<td>{{ $v_cusData->product_name }}</td>
						</tr>
  					@endforeach
  				</tbody>
  			</table>
  		</div>
  	</div>
    
	

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>