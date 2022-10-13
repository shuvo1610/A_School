@extends('layouts.master')
@section('content')
    <div class="main-content" style="min-height: 482px;">
        <section class="section">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Seller profile</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-stripe">
                                    <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>image</td>
                                        <td>First Name</td>
                                        <td>Last Name</td>
                                        <td>Phone</td>
                                        <td>Email</td>
                                        <td>Address</td>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td><img src="{{ asset($user->image) }}" alt="{{ $user->user_name }}" height="100" width="100"></td>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->address }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection



