



@extends('adminlte::page')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card">
                <div class="card-header"><strong>{{ $user->id }}</strong>
                </div></div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Service No:</strong> {{ $user->service_no }}
                        </li>
                        <li class="list-group-item">
                            <strong>Name:</strong> {{ $user->email }}
                        </li>
                        <li class="list-group-item">
                            <strong>Email:</strong> {{ $user->email }}
                        </li>
                        <li class="list-group-item">
                            <strong>Active:</strong> {{ $user->active }}
                        </li>
                        <li class="list-group-item">
                            <strong>Role:</strong> {{ $user->role->name }}
                        </li>
                        <li class="list-group-item">
                            <strong>Rank:</strong> {{ $user->ranks->name }}
                        </li>
                        <li class="list-group-item">
                            <strong>Location:</strong> {{ $user->locations->name }}
                        </li>
                        <li class="list-group-item">
                            <strong>Unit:</strong> {{ $user->units->name }}
                        </li>
                        <li class="list-group-item">
                            <strong>Created At:</strong> 
                            {{ $user->created_at ? $user->created_at->format('d-m-Y H:i') : 'N/A' }}
                        </li>
                        <li class="list-group-item">
                            <strong>Last Updated:</strong> 
                            {{ $user->updated_at ? $user->updated_at->format('d-m-Y H:i') : 'N/A' }}
                        </li>
                        
                        
                        {{-- <li class="list-group-item">
                            <strong>Created At:</strong> {{ $user->created_at->format('d-m-Y H:i') }}
                        </li>
                        <li class="list-group-item">
                            <strong>Last Updated:</strong> {{ $user->updated_at->format('d-m-Y H:i') }}
                        </li> --}}
                    </ul>
                       
                </div>
            </div>
        </div>
    </div>
</div>
     
                       
