@extends('layouts.app', ['title' => 'Contact'])


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<h2>Get In Touch</h2>

				<p><span class="text-muted">If you having trouble with this service, please <a href="mailto:your-account@helpful.io" data-helpful="laracarte" data-helpful-modal="on">ask for help</a>.</span></p>

				<form method="POST" action="/contact">
		            {!! csrf_field() !!}

		            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
		                <label class="control-label">Name</label>
		                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required="required">
		                {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}
		            </div>

		            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
		                <label class="control-label">Email</label>
		                <input type="email" name="email" value="{{ old('email') }}" class="form-control" required="required">
		                {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}
		            </div>


		            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
		                <textarea class="form-control" name="message" rows="10" cols="10" required="required">{{ old('message') }}</textarea>
		                {!! $errors->first('message', '<span class="text-danger">:message</span>') !!}
		            </div>

		            <div class="form-group">
		                <button type="submit" class="btn btn-default btn-block">Submit Enquiry &raquo;</button>
		            </div>
		        </form>
			</div>
		</div>
	</div>
@stop

@section('head')
	<script async src="https://assets.helpful.io/assets/widget.js"></script>
@stop