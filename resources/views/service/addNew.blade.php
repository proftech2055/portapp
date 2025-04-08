@extends('layouts.app')
@section('title','ADDNEW')

@section('content')

<div class="card col-md-9 mx-auto">
    <div class="card-body">
        @if(session('success'))
            <p style="color:green;">{{ session('success') }}</p>
        @endif
        <h5 class="font-weight-bold">Add Service</h5>
        <hr/>

        <span class="error"></span>
        <form action="{{ route('addService') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Service Name</label>
                <input type="text" name="serviceName" class="form-control" placeholder="Name" />
            </div>
            <div class="form-group">
                <label>Path</label>
                <input type="text" name="path" class="form-control" placeholder="path" />
            </div>
            <div class="form-group">
                <label>Ports</label>
                <select class="custom-select" name="port">
                    @foreach($data as $port)
                    <option value=""></option>
                    <option value="{{ $port->port_number }}">{{ $port->port_number }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-color">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
