<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<title>@yield('title')</title>
</head>
<body>
	<header>
		<div class="d-flex p-2 bg-color align-items-center">
			<h5 class="text-white font-weight-bold">Service Manager</h5>
		</div>
	</header>
	<main class="mt-3 col-md-8 mx-auto">
		<nav>
			<ul class="">
				<a href="{{ route('service.dashboard') }}" class="btn btn-color ml-2 mt-2"><i class="fas fa-bars"></i> Dashboard</a>
				<a href="{{ route('service.addNew') }}" class="btn btn-color ml-2 mt-2"><i class="fas fa-plus"></i> Add Service</a>
				<a href="{{ route('service.viewAll') }}" class="btn btn-color ml-2 mt-2"><i class="fas fa-folder-open"></i> View Services</a>
				<a href="{{ route('ports.portsView') }}" class="btn btn-color ml-2 mt-2"><i class="fas fa-wifi"></i> Ports</a>
				<a href="{{ route('index') }}" class="btn btn-color ml-2 mt-2"><i class="fas fa-power-off"></i> Logout</a>
			</ul>
			<hr />
		</nav>
		<section class="">
            @yield('content')
        </section>
	</main>
	<footer>
	</footer>
<script src="{{ asset('assets/js/jquery-3.5.1.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>

