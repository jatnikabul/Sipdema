@extends('frontend.landing_layout.app')

@section('title', $menu.' | ')
@section('content')
    @include('frontend.landing_layout.navigation')

    <div class="row">
        <div class="col-md-6  col-md-offset-3 animate-box">
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
            <center><h2>Login Form</h2></center>
            <form action="/student/login" method="POST">
                {{ csrf_field() }}
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="username">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Login" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
