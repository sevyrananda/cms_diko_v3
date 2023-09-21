<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html"> <img alt="image" src="{{url('otika')}}/assets/img/logo.png" class="header-logo" /> <span class="logo-name">DIKO ADMIN</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <!-- <li class="menu-header">Main</li> -->
      <li class="dropdown @if(request()->routeIs('admin')) active @endif">
        <a href="{{ route('admin') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>
      <li class="dropdown @if(request()->routeIs('post')) active @endif">
        <a href="{{ route('post') }}" class="nav-link"><i data-feather="share"></i><span>Create Post</span></a>
      </li>
      <li class="dropdown @if(request()->routeIs('listPost')) active @endif">
        <a href="{{ route('listPost') }}" class="nav-link"><i data-feather="list"></i><span>List Post</span></a>
      </li>
    </ul>
  </aside>
</div>