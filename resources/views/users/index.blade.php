@extends('adminlte::page')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card mt-3">
                <div class="card-header">{{ __('Users') }}</div>
                
                <div class="card-body">
                    <a href="{{ route('users.create') }}" class="btn btn-primary float-end">Add New User</a>
                    
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Service_no</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Active</th>
                                <th>Role</th>
                                <th>Rank</th>
                                <th>Location</th>
                                <th>Unit</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->service_no }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->active }}</td>
                    <td>{{ $user->role_id }}</td>
                    {{-- <td>{{ $user->role ? $user->role->name : 'No Role Assigned' }}</td> --}}

                    <td>{{ $user->rank_id}}</td>
                    <td>{{ $user->location_id }}</td>
                    <td>{{ $user->unit_id }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit User" ><i class="fa fa-pen"></i></a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"   class="btn btn-xs btn-danger" data-toggle="tooltip"  title="Delete User" ><i class="fa fa-trash"></i></button>
                                    </form>
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-xs btn-info" data-toggle="tooltip" title="Edit User" ><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table> 

            </div>
        </div>
    </div>
    @endsection
    <script>
        function confirmDelete(){
            return confirm('Are You sure you want to delete this record? This action be undone.');

        }

    </script>

