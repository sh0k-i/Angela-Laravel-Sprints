<nav
  class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
  id="layout-navbar">

  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
      <i class="bx bx-menu bx-sm"></i>
    </a>
  </div>

  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
    <ul class="navbar-nav flex-row align-items-center ms-auto">
      <!-- Place this tag where you want the button to render. -->
      <li class="nav-item lh-1 me-3">
        <a href="{{route('home')}}">Home</a>
      </li>

      <li class="nav-item lh-1 me-3">
        <!-- Button here -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                       this.closest('form').submit();">
              Logout
          </a>
      </form>
      </li>

      <!-- User Menu-->
      <li class="nav-item navbar-dropdown dropdown-user dropdown">
        <!-- Profile icon -->
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
          <div class="avatar avatar-online">
            <img src="{{ asset('sneat/assets/img/avatars/user.png') }}" alt class="w-px-40 h-auto rounded-circle" />
          </div>
        </a>

        <!-- Drop down -->
        <ul class="dropdown-menu dropdown-menu-end">
          <!-- Name and username -->
          <li>
            <a class="dropdown-item" href="#">
              <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar avatar-online">
                    <img src="{{ asset('sneat/assets/img/avatars/user.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </div>
                <div class="flex-grow-1">
                  <span class="fw-medium d-block">Name</span>
                  <small class="text-muted">username</small>
                </div>
              </div>
            </a>
          </li>
          <!-- /Name and username -->

        </ul>
        <!-- /Drop down -->
      </li>
      <!--/ User -->
    </ul>
  </div>
</nav>
