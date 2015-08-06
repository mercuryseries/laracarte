@extends('layouts.app', ['title' => 'Reset your password'])


@section('content')
    <div class="container">
        <form method="POST" action="/password/email">
            {!! csrf_field() !!}

            <div>
                Email
                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
            </div>

            <br>

            <div>
                <button type="submit" class="btn btn-default">
                    Send Password Reset Link
                </button>
            </div>
        </form>
    </div>
@stop