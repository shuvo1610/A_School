@extends('layouts.base')
@section('base.content')
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="{{ asset($user->image) }}" alt="{{$user->name}}" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header"><h4>User Update</h4></div>


                            <div class="card-body">
                                <form action="{{route('user.update',['id'=>$user->id])}}" method="POST" enctype="multipart/form-data">@csrf
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="first_name">First Name</label>
                                            <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">@if($errors->has('first_name'))
                                                <div class="text-danger">{{ $errors->first('first_name') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="last_name">Last Name</label>
                                            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">@if($errors->has('last_name'))
                                                <div class="text-danger">{{ $errors->first('last_name') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}">@if($errors->has('email'))
                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_name">User Name</label>
                                        <input id="user_name" type="text" class="form-control" name="user_name" value="{{ $user->user_name }}">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="phone" class="d-block">Phone</label>
                                            <input id="phone" type="text" class="form-control pwstrength" data-indicator="pwindicator" name="phone" value="{{ $user->phone }}">@if($errors->has('phone'))
                                                <div class="text-danger">{{ $errors->first('phone') }}</div>
                                            @endif
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="address" class="d-block">Address</label>
                                            <input id="address" type="text" class="form-control" name="address" value="{{ $user->address }}">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="image" value="{{ $user->image }}">@if($errors->has('image'))
                                            <div class="text-danger">{{ $errors->first('image') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary ">
                                            Update
                                        </button>
                                        <a href="{{route('user.index')}}" type="button" class="btn bti-primary" >Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; A.School 2022
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

