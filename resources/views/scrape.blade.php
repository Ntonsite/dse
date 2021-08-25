<!DOCTYPE html>
<html>
<head>
	<title>Scrape Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="col-md-6 offset-md-3 mt-5 wrapper">
			@foreach($data as $key => $value)
				<div class="card text-center">
					<h5 class="card-header">{{$key}}</h5>
					<div class="card-body">
						<p class="card-text">{{$value}}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</body>
</html>
