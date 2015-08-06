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

            @if($user->twitter)
              <li><a target="_blank" href="{{ $user->twitter }}"><i class="fa fa-twitter"></i> Twitter</a></li>
            @endif
       	</ul>

        @if($user->available_for_hire)
          <ul class="list-inline">
              <li><i class="fa fa-briefcase"></i> I´m available for hire!</li>
          </ul>
        @endif
   </div>
</div>