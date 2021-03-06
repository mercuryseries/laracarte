@extends('layouts.app', ['title' => 'Artisans'])

@section('content')
	<div class="container">
		<h1 class="text-center">List of {{ $usersCount }} artisans all over the world</h1>

		<br>

		@foreach ($users->chunk(12) as $group)
			<div class="row">
				@foreach ($group as $user)
					<div class="col-md-1 col-sm-3 col-xs-4 text-center spaced">
						<a href="{{ route('profile_path', $user->username) }}"><img src="{{ $user->present()->profileImage(70) }}" width="70" alt="{{ $user->name }}" class="img-rounded" /></a>
					</div>
				@endforeach
			</div>
		@endforeach

		{!! $users->render() !!}
	</div>
@stop