@extends('layouts.app', ['title' => 'About'])


@section('content')
	<div class="container">
		<h2>What is Laracarte?</h2>

		<p>Laracarte is a clone app of <a target="_blank" href="http://laramap.com">Laramap.com</a>.</p>
		<div class="row">
			<div class="col-md-6">
			<p class="alert alert-warning"><strong><i class="fa fa-warning"></i> This app has been built by <a target="_blank" href="http://twitter.com/mercuryeries">@mercuryeries</a> for learning purposes.</strong></p>
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
			<li>Amazone S3</li>
			<li>Mandrill</li>
			<li>Google Maps</li>
			<li>Gravatar</li>
			<li>Antony Martin's Geolocation Package</li>
			<li>Michel Fortin's Markdown Parser Package</li>
			<li>Heroku</li>
		</ul>
	</div>
@stop