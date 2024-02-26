<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-3">
    <div class="container py-1"><a class="navbar-brand text-sm fw-bold text-dark" href="{{route('home')}}">AppCon Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
          <li class="nav-item"><a class="nav-link active " href="{{route('home')}}">Home</a></li>
          @if (Route::has('login'))
            @auth
            <li class="nav-item"><a class="nav-link" href="{{route('account')}}">Account</a></li>
            <li class="nav-item"><form method="POST" action="{{ route('logout') }}">
              @csrf
              <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              this.closest('form').submit();">
              Logout
            </a>
            </form></li>
          @else
          <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Register</a></li>
          @endauth
          @endif
        </ul>
      </div>
    </div>
  </nav>
