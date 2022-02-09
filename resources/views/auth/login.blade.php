@extends('layouts.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>WP</b>Accounts</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        {{ Form::open(['route' => 'login','method'=>'post']) }}
                <div class="input-group mb-3">
                    {{ Form::text('email',null,['class'=>'form-control','placeholder'=>'Email']) }}
                    <div class="input-group-append">
                        <span class="fas fa-envelope input-group-text"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    {{ Form::password('password',['class'=>'form-control','placeholder'=>'Password']) }}
                    <div class="input-group-append">
                        <span class="fab fa-buromobelexperte input-group-text"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            {{ Form::close() }}

        {{-- <div class="social-auth-links text-center mb-3">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
          </a>
        </div> --}}
        <!-- /.social-auth-links -->

        {{-- <p class="mb-1">
          <a href="{{route('password.request')}}">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="{{route('register')}}" class="text-center">Register a new membership</a>
        </p> --}}
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
@endsection
