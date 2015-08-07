@extends('layouts.app', ['title' => 'About'])


@section('content')
	<div class="container">
		<h2>What is Laracarte?</h2>

		<p>Laracarte is a clone of <a target="_blank" href="http://laramap.com">Laramap.com</a> created by <a target="_blank" href="http://twitter.com/fwartner">@fwartner</a>.</p>
		<div class="row">
			<div class="col-md-6">
			<p class="alert alert-warning"><strong>This app has been built by <a target="_blank" href="http://twitter.com/mercuryseries">@mercuryseries</a> for learning purposes.</strong></p>
			</div>
		</div>

		<p>Feel free to help to improve the <a target="_blank" href="https://github.com/mercuryseries/laracarte">source code</a>.</p>

		<hr>

		<h2>What is Laramap?</h2>
		<p>Laramap is the website by which Laracarte was inspired :).</p>
		<p>More info <a target="_blank" href="http://laramap.com/page/about">here</a>.</p>

		<hr>

		<h2>Which tools and services are used in Laracarte?</h2>
		<p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.</p>
		<ul>
			<li>Laravel</li>
			<li>Bootstrap</li>
			<li>Google Maps</li>
			<li>Gravatar</li>
			<li>Antony Martin's Geolocation Package</li>
			<li>Heroku for Deployment</li>
		</ul>
	</div>
@stop