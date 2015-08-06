@extends('layouts.app', ['title' => 'Account'])

@section('content')
	<div class="container">
		@include('shared/user_infos')

		<hr>

		<div class="row">
			<div class="col-sm-3">
				<img src="{{ Gravatar::src($user->email, 200) }}" alt="{{ $user->name }}" class="img-rounded" width="100%" />
			</div>
			<div class="col-sm-4">
				<h3>Skills</h3>
			</div>
			<div class="col-md-5">
				<h3>Biography</h3>
			</div>
		</div>
	</div>
@stop