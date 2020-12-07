<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/article') }}">Article</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/') }}">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/') }}">Link</a>
        </li> --}}
        
       
      </ul>
      <form class="form-inline my-1 my-lg-0">
        <ul class="navbar-nav mr-auto row">

            @if (Route::has('login') )
                <div class="hidden fixed top-0 right-0 px-6 py-2 sm:block">
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link text-white">BackEnd</a>

                    </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link text-white">Login</a>

                        </li>

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link text-white">Register</a>
                        </li>
                    @endif
                    @endauth
                </div>
            @endif
        </ul>

      </form>
    </div>
  </nav>