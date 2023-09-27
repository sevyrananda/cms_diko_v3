<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{ url('otika') }}/assets/img/logo.png" class="header-logo" />
                <span class="logo-name">DIKO ADMIN</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <!-- <li class="menu-header">Main</li> -->
            <li class="dropdown @if (request()->routeIs('home')) active @endif">
                <a href="{{ route('home') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown @if (request()->routeIs('list')) active @endif">
                <a href="{{ route('list') }}" class="nav-link"><i data-feather="list"></i><span>List Post</span></a>
            </li>
            <li class="dropdown @if (request()->routeIs('create')) active @endif">
                <a href="{{ route('create') }}" class="nav-link"><i data-feather="share"></i><span>Create
                        Post</span></a>
            </li>
        </ul>
    </aside>
</div>
