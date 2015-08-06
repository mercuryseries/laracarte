@extends('layouts.app', ['title' => 'Artisans'])

@section('content')
	<div class="container">
		<h1 class="text-center">List of {{ $usersCount }} artisans all over the world</h1>

		<br>

		@foreach ($users->chunk(12) as $group)
			<div class="row">
				@foreach ($group as $user)
					<div class="col-md-1 col-sm-3 col-xs-4 text-center spaced">
						<a href="{{ route('artisan_path', $user->username) }}"><img src="{{ Gravatar::src($user->email) }}" alt="{{ $user->name }}" class="img-rounded" /></a>
					</div>
				@endforeach
			</div>
		@endforeach

		{!! $users->render() !!}
	</div>
@stop