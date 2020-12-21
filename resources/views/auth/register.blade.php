@extends('layouts.auth')
@section('content')
<div class="col-md-6 mx-auto mt-5 justify-content-center">
    <div class="card">
        <div class="card-header">Register as a new user</div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                 <!-- name -->
                 <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <!-- Address -->
                     <div class="form-group">
                    <label for="address">Address</label>
                    <input name="address" type="text" class="form-control" id="address">
                    @if ($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                </div>

                <!-- phone number-->
                <div class="form-group">
                    <label for="phone_number">Phone_number</label>
                    <input name="phone_number" type="text" class="form-control" id="phone_number">
                    @if ($errors->has('phone_number'))
                        <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                    @endif
                </div>

                
                <!-- user name -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" type="text" class="form-control" id="username">
                    @if ($errors->has('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif

                <!-- password polje -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password">
                    @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <!-- password confirm polje -->
                <div class="form-group">
                    <label for="password-confirmation">Repeat your password</label>
                    <input name="password_confirmation" type="password" class="form-control" id="password-confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>

               

                <div class="mt-3">
                    <a href="{{ route('login') }}" class="btn btn-link float-right">Login</a>
                    <div class="text-center float-right">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection