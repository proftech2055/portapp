@extends('layouts.app')
@section('title','PORTS')

@section('content')
			<div class="mt-4">
				<div class="d-flex mb-2 align-items-center">
					<h3>Ports</h3>
					{{-- <form action="" class="d-flex ml-auto">
						<input type="" class="form-control" placeholder="search" />
						<button type="submit" class="btn btn-success">
							<i class="fa fa-search"></i>
						</button>
					</form> --}}
				</div>
                @if(session('success'))
                    <p style="color:green;">{{session('success')}}</p>
                @endif
				<div class="">
					<button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#add-port-modal">Add Port</button>
					<div class="modal" id="add-port-modal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<h5>Add Port</h5>
									<form action="{{ route('store')}}" method="POST">
                                        @csrf
										<label>Port number</label>
										<input type="number" name="port_number" class="form-control" />
										<button type="submit" class="btn mt-3 btn-color">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
                @if(session('succes'))
                <p style="color:red;">{{session('success')}}</p>
            @endif
				<table class="table bordered">
					<thead>
						<th>Port</th>
					</thead>
					<tbody>
                        @foreach($data as $port)
						<tr class="">
							<td>{{ $port->id}}</td>
                                <td>{{ $port->port_number}}</td>
                                <td>
                                <form action="{{ route('deletePort',$port->id) }}" method="POST">
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

