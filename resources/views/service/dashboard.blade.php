@extends('layouts.app')
@section('title','DASHBOARD')

@section('content')

			<div class="row">
				<div class=" col-md-4 mt-2">
					<div class="card">
						<div class="card-body d-flex align-items-center">
							<i class="fas text-color fa-folder fa-3x"></i>
							<div class="ml-auto">
								<p class="m-0">No. of Services</p>
								<h4 class="m-0 font-weight-bold text-center">{{ $data2 }}</h4>
							</div>
						</div>
					</div>
				</div>
				<div class=" col-md-4 mt-2">
					<div class="card">
						<div class="card-body d-flex align-items-center">
							<i class="fas text-color fa-wifi fa-3x"></i>
							<div class="ml-auto">
								<p class="m-0">No. of Ports</p>
								<h4 class="m-0 font-weight-bold text-center">{{ $data1 }}</h4>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="mt-4">
				<div class="d-flex mb-2 align-items-center">
					<h3>Services</h3>
					<form action="" class="d-flex ml-auto">
						<input type="" class="form-control" placeholder="search" />
						<button type="submit" class="btn btn-success">
							<i class="fa fa-search"></i>
						</button>
					</form>
				</div>

				<table class="table bordered">
					<thead>
						<th>Service name</th>
						<th>Path</th>
						<th>Port</th>
						<th>Status</th>
						<th>Action</th>
					</thead>
					<tbody>
						<tr class="">
                            @foreach($data as $item)
                            <tr class="">
                                <td>{{ $item->serviceName }}</td>
                                <td>{{ $item->path }}</td>
                                <td>{{ $item->port }}</td>
                                <td>{{ $item->status ? 'Running' : 'Stopped'}}</td>
                               <td><button type="button" class="btn btn-success">Start</button></td>
                                <td><button type="button" class="btn btn-danger">Stop</button></td>
                                @endforeach
						</tr>
					</tbody>
				</table>
			</div>

@endsection

