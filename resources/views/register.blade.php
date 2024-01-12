@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center align-items-center pt-5 ">
          
        <div class="register-card border-1 p-4 bg-white w-50 shadow">
           
            <h3 class="text-center">Sign Up</h3>
            <form method="POST" id="registerform" action="{{route('do.register')}}">
                @csrf
            <div class="form-group mb-4 ">
                <label for="username">Your Name</label>
                <input type="text"  id="username" class="form-control" name="username" 
                                  autofocus placeholder="First and last name" value="{{old('username')}}">
                  @if ($errors->has('username'))<span class="text-danger">{{ $errors->first('username') }}</span>
                  @endif
              </div>
              <div class="form-group mb-4 ">
                <label for="username">Email</label>
                <input type="email"  id="email" class="form-control" name="email" 
                                  autofocus placeholder="Email"  value="{{old('email')}}" >
                  @if ($errors->has('email'))<span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
              </div>
              <div class="form-group mb-4 ">
                <label for="password">Password</label>
                <input type="password"  id="password" placeholder="At least 6 characters" class="form-control" name="password" 
                                  autofocus>
                  @if ($errors->has('password'))<span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
              </div>
              <div class="form-group mb-4 ">
                <label for="username">Referral Code</label>
                <input type="text"  id="refcode" class="form-control" name="refcode" 
                                  autofocus placeholder="Referral Code" value="{{old('refcode')}}">
                 @if (session()->has('error'))
                    <span class="text-danger">{{session()->get('error')}}</span>
                    @endif
              </div>
              <div class="d-grid mx-auto">
                <button type="submit" class="btn btn-block btn-primary register-btn">Register</button>
            </div>
            </form>
            <div class="text-center my-2">
                <span>Already have an account? <a href="{{route('login')}}" class="text-muted">Sign in</a></span>        
            </div>
        </div>
    </div>
</div>
@endsection
