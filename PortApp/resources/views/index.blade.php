<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<title>Login</title>
</head>
<body>
	<header>
		<div class="d-flex p-3 bg-color">
			<h5 class="text-white font-weight-bold">Service MAnager</h5>
		</div>
	</header>
	<main class="mt-3">
		<div class="card col-md-6 mx-auto">
			<div class="card-body">
				<h5 class="font-weight-bold">Login</h5>
				<hr/>
				<span class="error"></span>
				<form action="" method="">
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" placeholder="Email" />
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Password" />
					</div>
					<div class="form-group">
						<a href="{{ route('service.dashboard') }}" class="btn btn-color">Login</a>
					</div>
				</form>
			</div>
		</div>
	</main>
</body>
</html>
