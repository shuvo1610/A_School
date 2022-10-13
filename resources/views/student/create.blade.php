@extends('layouts.base')
@section('base.content')
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header"><h3>Student Registration</h3></div>

                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">@csrf
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="first_name">First Name</label>
                                            <input id="first_name" type="text" class="form-control" name="first_name" value="">@if($errors->has('first_name'))
                                                <div class="text-danger">{{ $errors->first('first_name') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="last_name">Last Name</label>
                                            <input id="last_name" type="text" class="form-control" name="last_name">@if($errors->has('last_name'))
                                                <div class="text-danger">{{ $errors->first('last_name') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email">@if($errors->has('email'))
                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_name">User Name</label>
                                        <input id="user_name" type="text" class="form-control" name="user_name">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">@if($errors->has('password'))
                                                <div class="text-danger">{{ $errors->first('password') }}</div>
                                            @endif
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password2" class="d-block">Password Confirmation</label>
                                            <input id="password2" type="password" class="form-control" name="password-confirm">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="phone" class="d-block">Phone</label>
                                            <input id="phone" type="text" class="form-control pwstrength" data-indicator="pwindicator" name="phone">@if($errors->has('phone'))
                                                <div class="text-danger">{{ $errors->first('phone') }}</div>
                                            @endif
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="address" class="d-block">Address</label>
                                            <input id="address" type="text" class="form-control" name="address">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="image" value="">@if($errors->has('image'))
                                            <div class="text-danger">{{ $errors->first('image') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary ">
                                            Submit
                                        </button>
                                        <a href="{{route('dashboard')}}" type="button" class="btn bti-primary" >Back</a>
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

