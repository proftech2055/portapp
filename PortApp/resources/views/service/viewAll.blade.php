@extends('layouts.app')
@section('title','VIEWALL')

@section('content')
    @if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif
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
                    @foreach($valid as $item)
					<tr class="">
                        <td>{{ $item->serviceName }}</td>
                        <td>{{ $item->path }}</td>
                        <td>{{ $item->port }}</td>
                        <td>{{ $item->status ? 'Running' : 'Stopped'}}</td>
                        <td>
                            <form action="{{ route('toggleStatus',$item->id) }}" method="POST">
                                @csrf
                                <button>
                                    {{ $item->status ? 'Running' : 'Stopped'}}
                                </button>
                            </form>
                        </td>
                       {{-- <td><button type="button" class="btn btn-success">Start</button></td>
						<td><button type="button" class="btn btn-info">Stop</button></td> --}}
						<td><a href="{{ route('service.edit',$item->id) }}" class="btn btn-warning">Edit</a></td>
						<td>
                            <form action="{{ route('delete',$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
				</tbody>
			</table>
		</div>
        @endsection
