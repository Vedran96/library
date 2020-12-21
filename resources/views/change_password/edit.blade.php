@extends('layouts.app')

@section('content')
<div class="col-sm-6 mx-auto mt-5">

    <h1>Set a new password</h1>

    <form class="mt-5" action="{{ route('change_password.update', ['user' => $id]) }}" method="POST">

        @csrf

        <!-- password polje -->
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password">
            @if ($errors->has('password'))
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

        <button type="submit" class="btn btn-primary mb-4">Change password</button>

    </form>
</div>
@endsection