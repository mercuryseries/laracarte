@extends('layouts.app', ['title' => $user->name])

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>{{ $user->name }}</h2>
				<h4><i class="fa fa-clock-o"></i> Member since {{ $user->created_at->format('l jS \\of F Y') }}</h4>
			</div>

			<div class="col-md-6 text-right">
	            <ul class="list-inline">
	            	@if($user->github)
		            	<li><a target="_blank" href="{{ $user->github }}"><i class="fa fa-github"></i> GitHub</a></li>
		            @endif

		            @if($user->website)
		            	<li><a target="_blank" href="{{ $user->website }}"><i class="fa fa-globe"></i> Website / Blog</a></li>
		           	@endif
	           	</ul>
	       </div>
		</div>

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

		<hr>

		<div id="map-canvas" style="width:100%; height:200px;"></div>
	</div>
@stop

@section('javascripts')
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript">
		function initialize() {
		  var myLatlng = new google.maps.LatLng(Laracarte.latitude, Laracarte.longitude);
		  var mapOptions = {
		    zoom: 10,
		    center: myLatlng,
		    mapTypeId: google.maps.MapTypeId.ROADMAP
		  }
		  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		  var marker = new google.maps.Marker({
		      position: myLatlng,
		      map: map,
			  animation:  google.maps.Animation.DROP
		  });
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
@stop