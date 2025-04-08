@extends('layouts.app')
@section('title', 'EDIT')

@section('content')
			<div class="card col-md-9 mx-auto">
				<div class="card-body">
					<h5 class="font-weight-bold">Edit Service</h5>
					<hr />
					<span class="error"></span>
					<form action="{{ route('update',$data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="serviceName" value="{{ old('serviceName',$data->serviceName) }}" class="form-control" placeholder="Name" />
						</div>
						<div class="form-group">
							<label>Path</label>
							<input type="text" name="path" value="{{ old('path',$data->path) }}" class="form-control" placeholder="path" />
						</div>
						<div class="form-group">
							<label>Ports</label>
                            <input type="number" name="port" value="{{ old('port',$data->port) }}" class="form-control" placeholder="port"/>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-color">Submit</button>
						</div>
					</form>
				</div>
			</div>
            @endsection

