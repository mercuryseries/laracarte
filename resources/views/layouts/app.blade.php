<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<title>{{ isset($title) ?  $title . ' | ' : '' }} Laracarte - List of artisans</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css') }}">
</head>
<body
	@if(Route::currentRouteName() == "root_path")
		class="home"
	@endif
>
	@include('layouts/partials/_nav')

	@yield('content')

	@include('layouts/partials/_footer')
</body>
</html>