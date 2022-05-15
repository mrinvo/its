<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html"><h2>Intelligent <em>Tourist</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{ url('user_ques') }}">Quesionnaire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('allplacesview') }}">All Places</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('manual_search') }}">Manual search</a>
            </li>
            <li class="nav-item" id="x">
               @if (Route::has('login'))
              
                    @auth
                     
                    <li>
                      <a class="nav-link" href="http://127.0.0.1:8000/user/profile">Profile</a>
                    </li>
                    <li>
                      <form method="POST" action="http://127.0.0.1:8000/logout" x-data="">
                       @csrf
                       <input class="nav-link" type="submit" value="logout">>
                        {{-- <a class="nav-link" href="http://127.0.0.1:8000/logout" @click.prevent="$root.submit();">Log Out</a> --}}
                    </form>
                    </li>
                   

              
                    @else
                      <li><a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                      @if (Route::has('register'))
                         <li> <a href="{{ route('register') }}" class="nav-link">Register</a></li>
                      @endif
                @endauth
              
          @endif

            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>