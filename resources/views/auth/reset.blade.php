@extends('layouts.app', ['title' => 'Reset your password'])


@section('content')
    <div class="container">
        <form method="POST" action="/password/reset">
            {!! csrf_field() !!}
            <input type="hidden" name="token" value="{{ $token }}">

            <div>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
            </div>

            <div>
                <input type="password" name="password" class="form-control">
            </div>

            <div>
                <input type="password" name="password_confirmation" class="form-control">
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