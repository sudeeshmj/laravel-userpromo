@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center align-items-center pt-5">
          
        <div class="register-card border-1 p-4 bg-white w-50 shadow">
            <h3 class="text-center">Sign In</h3>
            @if (session()->has('message'))
                <p class="text-danger text-center">{{session()->get('message')}}</p>
            @endif
            <form method="POST" id="registerform" action="{{route('do.login')}}">
                @csrf
              <div class="form-group mb-4 ">
                <label for="username">Email</label>
                <input type="email"  id="email" class="form-control" name="email" 
                                  autofocus placeholder="Enter Your Email Address"  value="{{old('email')}}" >
                  @if ($errors->has('email'))<span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
              </div>
              <div class="form-group mb-4 ">
                <label for="password">Password</label>
                <input type="password"  id="password" placeholder="Enter Your Password" class="form-control" name="password" 
                                  autofocus>
                  @if ($errors->has('password'))<span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
              </div>
              <div class="d-grid mx-auto">
                <button type="submit" class="btn btn-block btn-primary register-btn">Login</button>
            </div>
            </form>
            <div class="text-center my-3">
                <span>Not a member? <a href="{{route('register')}}" class="text-muted">Sign up</a></span>        
            </div>
        </div>
    </div>
</div>
@endsection
