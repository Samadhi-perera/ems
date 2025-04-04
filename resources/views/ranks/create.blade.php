



@extends('adminlte::page')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card">
                <div class="card-header">{{ __(' Add Rank') }}</div>
                <div class="card-body">
                    <form action="{{ route('ranks.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name:</label>
                            <input type="text" name="name" required class="form-control"/>
                        </div>
                       
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
     
                       
