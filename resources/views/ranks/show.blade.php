



@extends('adminlte::page')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card">
                <div class="card-header"><strong>{{ $rank->name }}</strong>
                </div>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Name:</strong> {{ $rank->name }}
                        </li>
                        
                        <li class="list-group-item">
                            <strong>Created At:</strong> {{ $rank->created_at->format('d-m-Y H:i') }}
                        </li>
                        <li class="list-group-item">
                            <strong>Last Updated:</strong> {{ $rank->updated_at->format('d-m-Y H:i') }}
                        </li>
                    </ul>
                       
                </div>
            </div>
        </div>
    </div>
</div>
     
                       
