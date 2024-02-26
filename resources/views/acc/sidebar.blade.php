<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    @include('acc.title')
    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboards -->
      <li class="menu-item {{ Request::is('account') ? 'active open' : '' }}">
        <a href="{{url('account')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Dashboards">Dashboards</div>
        </a>
      </li>

      <!-- Post page -->
      <li class="menu-item {{ Request::is('post_page') ? 'active open' : '' }}">
        <a href= "{{url('post_page')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">Create a Post</div>
        </a>
      </li>

      <!-- Show posts -->
      <li class="menu-item {{ Request::is('view_posts') ? 'active open' : '' }}">
        <a href="{{url('view_posts')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="View Posts">View Posts</div>
        </a>
      </li>
    </ul>
</aside>
