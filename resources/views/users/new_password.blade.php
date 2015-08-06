@extends('layouts.app', ['title' => 'Change Password'])


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

				<h3>It's a good idea that you want to change your password :)</h3>

				<hr>

                @include('errors.list')

                <form method="POST" action="{{ route('new_password_path') }}">
                    {!! csrf_field() !!}
                    {!! method_field('PATCH') !!}

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label class="control-label">Current Password</label>
                        <input type="current_password" name="current_password" id="current_password" class="form-control">
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label class="control-label">New Password</label>
                        <input type="new_password" name="new_password" id="new_password" class="form-control">
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label class="control-label">Confirm New Password</label>
                        <input type="new_password_confirmation" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Update Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop