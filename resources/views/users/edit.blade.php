@extends('adminlte::page')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card">
                <div class="card-header">{{ __(' Edit User') }}</div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Service No:</label>
                            <input type="text" name="service_no" id="service_no" class="form-control" value="{{ old('service_no', $user->service_no) }}" required>

                           
                        </div>
                        <div class="mb-3">
                            <label for="">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>

                           
                        </div>
                        <div class="mb-3">
                            <label for="">Email: </label>
                            <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                            <div class="mb-3">
                                <label for="">Rank: </label>
                                <select name="rank_id" id="rank_id" class="form-control" required>
                                    @foreach ($rank as $rank)
                                        <option value="{{ $rank->id }}">{{ $rank->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Unit: </label>
                                <select name="unit_id" id="unit_id" class="form-control" required>
                                    @foreach ($unit as $unit)
                                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Location: </label>
                                <select name="location_id" id="location_id" class="form-control" required>
                                    @foreach ($location as $location)
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Role: </label>
                                <select name="role_id" id="role_id" class="form-control" required>
                                    @foreach ($role as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                        </div>
                        <div class="mb-3">
                            <label for="">Password: </label>
                            <input type="text" name="password" id="password" class="form-control" value="{{ old('password', $user->password) }}"  required>

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
     
                       
