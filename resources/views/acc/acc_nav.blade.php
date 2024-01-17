
<div class="header_section">
    <div class="header_main">
       <div class="container-fluid">
          <div class="logo"><a href="index.html"><img src="images/logo3.png"></a></div>
          <div class="menu_main">
             <ul>
                <li class="active"><a href="{{route('home')}}">Home</a></li>
                <li><form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                 this.closest('form').submit();">
                        Logout
                    </a>
                </form></li>
             </ul>
          </div>
       </div>
    </div>
 </div>
