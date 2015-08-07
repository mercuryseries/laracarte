@extends('layouts.app', ['title' => 'Edit Profile'])


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h3>Edit Profile &middot; {{ $user->name }}</h3>

                {!! Form::model($user, ['route' => 'account_path', 'method' => 'PATCH', 'files' => true]) !!}

                    <div class="row">
                        <div class="col-md-6 col-md-push-6 text-right">
                            <div class="form-group {{ $errors->has('available_for_hire') ? 'has-error' : '' }}">
                                <label class="control-label text-info">
                                {!! Form::hidden('available_for_hire', false) !!}
                                {!! Form::checkbox('available_for_hire', true) !!} I'm available for hire</label>
                                {!! $errors->first('available_for_hire', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>

                    <fieldset>
                        <legend class="text-warning"><i class="fa fa-lock"></i> Personal Informations <a href="#" class="text-warning slider-arrow"><span class="pull-right"><i class="fa fa-chevron-up"></i></span></a></legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                    {!! Form::label('address', 'Address', ['class' => 'control-label']) !!}
                                    <span class="help-text">(for the map)</span>
                                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('address', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    {!! Form::label('email', 'Email Address', ['class' => 'control-label']) !!}
                                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                                    {!! Form::label('username', 'Username', ['class' => 'control-label']) !!}
                                    {!! Form::text('username', null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('username', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <br>
                    <br>

                    <fieldset class="hide-by-default">
                        <legend class="text-warning"><i class="fa fa-globe"></i> Where can we find you on the web? <a href="#" class="text-warning slider-arrow"><span class="pull-right"><i class="fa fa-chevron-down"></i></span></a></legend>
                        <div class="row">
                            <div class="col-md-6 {{ $errors->has('website') ? 'has-error' : '' }}">
                                <div class="form-group">
                                    {!! Form::label('website', 'Website / Blog', ['class' => 'control-label']) !!}
                                    <span class="help-text">(Starting with http:// or https://)</span>
                                    {!! Form::url('website', null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('website', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('github') ? 'has-error' : '' }}">
                                    {!! Form::label('github', 'Github Profile', ['class' => 'control-label']) !!}
                                    <span class="help-text">(Starting with http:// or https://)</span>
                                    {!! Form::url('github', null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('github', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group {{ $errors->has('twitter') ? 'has-error' : '' }}">
                                    {!! Form::label('twitter', 'Twitter Profile', ['class' => 'control-label']) !!}
                                    <span class="help-text">(Starting with http:// or https://)</span>
                                    {!! Form::url('twitter', null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('twitter', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <br>
                    <br>

                    <fieldset class="hide-by-default">
                        <legend class="text-warning"><i class="fa fa-file"></i> Tell us more about you <a href="#" class="text-warning slider-arrow"><span class="pull-right"><i class="fa fa-chevron-down"></i></span></a></legend>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('avatar') ? 'has-error' : '' }}">
                                    {!! Form::label('avatar', 'Profile Image', ['class' => 'control-label']) !!}
                                    {!! Form::file('avatar') !!}
                                    {!! $errors->first('avatar', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('bio') ? 'has-error' : '' }}">
                                    {!! Form::label('bio', 'Biography', ['class' => 'control-label']) !!}
                                    <span class="help-text">(Starting with http:// or https://)</span>
                                    {!! Form::textarea('bio', null, ['class' => 'form-control', 'placeholder' => 'You can use Markdown for styling your biography', 'cols' => '10', 'rows' => '10']) !!}
                                    {!! $errors->first('bio', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <br>
                    <br>

                    <fieldset class="hide-by-default">
                        <legend class="text-warning"><i class="fa fa-star"></i> How strong are you? <a href="#" class="text-warning slider-arrow"><span class="pull-right"><i class="fa fa-chevron-down"></i></span></a></legend>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('laravel', 'Laravel', ['class' => 'control-label']) !!}
                                    {!! Form::selectRange('laravel', 1, 100, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('frontend', 'Frontend', ['class' => 'control-label']) !!}
                                    {!! Form::selectRange('frontend', 1, 100, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('backend', 'Backend', ['class' => 'control-label']) !!}
                                    {!! Form::selectRange('backend', 1, 100, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('mobile', 'Mobile', ['class' => 'control-label']) !!}
                                    {!! Form::selectRange('mobile', 1, 100, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-block">Save changes</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop