@extends('layouts.app', ['title' => 'Change Password'])


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

				<h3>It's a good idea that you want to change your password :)</h3>

				<hr>

                <form method="POST" action="{{ route('new_password_path') }}">
                    {!! csrf_field() !!}
                    {!! method_field('PATCH') !!}

                    <div class="form-group {{ $errors->has('current_password') ? 'has-error' : '' }}">
                        <label class="control-label">Current Password</label>
                        <input type="password" name="current_password" id="current_password" class="form-control" required="required">
                        {!! $errors->first('current_password', '<span class="text-danger">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label class="control-label">New Password</label>
                        <input type="password" name="password" id="password" class="form-control" required="required">
                        {!! $errors->first('password', '<span class="text-danger">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <label class="control-label">Confirm New Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Update Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop