@extends('layouts.app', ['title' => $user->name])

@section('content')
	<div class="container">
		@include('shared/user_infos')

		<hr>

		<div id="map-canvas" style="width:100%; height:200px;"></div>
	</div>
@stop

@section('scripts.footer')
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript">
		function initialize() {
		  var myLatlng = new google.maps.LatLng(Laracarte.latitude, Laracarte.longitude);

		  var mapOptions = {
		    zoom: 10,
		    center: myLatlng,
		    mapTypeId: google.maps.MapTypeId.ROADMAP
		  };

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