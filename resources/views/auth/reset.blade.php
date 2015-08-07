@extends('layouts.app', ['title' => 'Reset your password'])


@section('content')
    <div class="container">
        <form method="POST" action="/password/reset">
            {!! csrf_field() !!}
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <label class="control-label" for="email">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
            </div>

            <div class="form-group">
                <label class="control-label" for="password">New Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="form-group">
                <label class="control-label" for="password_confirmation">New Password Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>

            <br>

            <div>
                <button type="submit" class="btn btn-default">
                    Reset Password
                </button>
            </div>
        </form>
    </div>
@stop