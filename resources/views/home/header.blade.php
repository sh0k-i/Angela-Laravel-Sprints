<div class="header_main">


    <div class="container-fluid">
        <div class="logo"><a href="index.html"><img src="images/logo3.png"></a></div>
        <div class="menu_main" id="navbar">
            <ul>
                <li class="active"><a href="{{route('home')}}">Home</a></li>

                @if (Route::has('login'))
                    @auth
                        <li><a href="{{route('account')}}">Account</a></li>
                        <li><form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                         this.closest('form').submit();">
                                Logout
                            </a>
                        </form></li>



                    @else
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>

</div>
