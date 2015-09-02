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
            	<li><a target="_blank" href="{{ $user->present()->website }}"><i class="fa fa-globe"></i> Website / Blog</a></li>
           	@endif

            @if($user->twitter)
              <li><a target="_blank" href="{{ $user->twitter }}"><i class="fa fa-twitter"></i> Twitter</a></li>
            @endif
       	</ul>

        @if($user->available_for_hire)
          <ul class="list-inline">
              <li><i class="fa fa-briefcase"></i> I'm available for hire!</li>
          </ul>
        @endif
   </div>
</div>

<hr>

<div class="row">
  <div class="col-sm-3">
    <img src="{{ $user->present()->profileImage(200) }}" alt="{{ $user->name }}" class="img-rounded" width="100%" />
  </div>
  <div class="col-sm-4">
    <h3>Skills</h3>
    <br>
    <div class="progress">
      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ $user->laravel }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $user->laravel }}%;">
        Laravel
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ $user->frontend }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $user->frontend }}%;">
        Frontend
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ $user->backend }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $user->backend }}%;">
        Backend
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ $user->mobile }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $user->mobile }}%;">
        Mobile
      </div>
    </div>
  </div>
  <div class="col-md-5">
    <h3>Biography</h3>
    <br>
    <div>
      @if($user->bio)
        {!! $user->present()->biography !!}
      @else
        <p>No biography specified.</p>
      @endif
    </div>
  </div>
</div>