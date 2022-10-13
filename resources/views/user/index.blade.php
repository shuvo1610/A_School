@extends('layouts.master')
@section('content')
    <div class="main-content" style="min-height: 482px;">
        <section class="section">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-13">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">User Information</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-stripe">
                                    <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Image</td>
                                        <td>User Name</td>
                                        <td>Phone</td>
                                        <td>Email</td>
                                        <td>Address</td>
                                        <td>Action</td>
                                    </tr>
                                    </thead>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td><img src="{{ asset($user->image) }}" alt="{{$user->name}}" height="80" width="80"></td>
                                            <td>{{ $user->user_name }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="{{route('user.edit',['id'=>$user->id])}}">Edit</a>
                                                        <a class="dropdown-item" href="{{route('user.delete',['id'=>$user->id])}}">Delete</a>
                                                        <a class="dropdown-item" href="{{route( 'user.profile',['id'=>$user->id])}}">View</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


