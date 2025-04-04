



@extends('adminlte::page')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card">
                <div class="card-header">{{ __(' Edit Location') }}</div>
                <div class="card-body">
                    <form action="{{ route('locations.update', $location->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $location->name) }}" required>

                        </div>
                      
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
     
                       
