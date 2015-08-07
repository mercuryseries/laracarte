@extends('layouts.app', ['title' => 'Reset your password'])


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <form method="POST" action="/password/email">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                    </div>

                    <br>

                    <div>
                        <button type="submit" class="btn btn-default">
                            Send Password Reset Link
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop