<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home')}}"><h2>Stand Blog<em>.</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home')}}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('articles')}}">Blog Entries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact')}}">Contact Us</a>
            </li>
            @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('registration')}}">Registration</a>
              </li> 
            @endguest
            @auth
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout')}}">logout</a>
              </li>
            @endauth

          </ul>
        </div>
      </div>
    </nav>
</header>