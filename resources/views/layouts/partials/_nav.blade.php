<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('root_path') }}">Laracarte</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('root_path') }}">Home</a></li>
        <li><a href="{{ route('about_path') }}">About</a></li>
        <li><a href="{{ route('artisans_path') }}">Artisans</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a target="_blank" href="http://laravel.com">Laravel.com</a></li>
            <li><a target="_blank" href="http://laravel.io">Laravel.io</a></li>
            <li><a target="_blank" href="http://laracasts.com">Laracasts</a></li>
            <li><a target="_blank" href="http://larajobs.com">Larajobs</a></li>
            <li><a target="_blank" href="http://laravel-news.com">Laravel News</a></li>
            <li><a target="_blank" href="http://larachat.co">Larachat</a></li>
          </ul>
        </li>
        <li><a href="{{ route('contact_path') }}">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-rounded" src="{{ Auth::user()->present()->profileImage(20)  }}" width="20" /> {{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('account_path') }}">My profile</a></li>
              <li><a href="{{ route('edit_account_path') }}">Edit profile</a></li>
              <li><a href="{{ route('new_password_path') }}">Change my password</a></li>
              <li class="divider"></li>
              <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
            </ul>
          </li>
        @else
          <li><a href="{{ url('/auth/login') }}">Login</a></li>
          <li><a href="{{ url('/auth/register') }}">Register</a></li>
        @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>