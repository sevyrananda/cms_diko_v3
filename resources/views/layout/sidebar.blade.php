<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{ url('otika') }}/assets/img/logo.png" class="header-logo" />
                <span class="logo-name">DIKO ADMIN</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="dropdown @if (request()->routeIs('home')) active @endif">
                <a href="{{ route('home') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown @if (request()->routeIs('dataUser')) active @endif">
                <a href="{{ route('dataUser') }}" class="nav-link"><i data-feather="user"></i><span>Data User</span></a>
            </li>
            <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="heart"></i><span>Produk</span></a>
                <ul class="dropdown-menu" style="display: block">
                    <li class="@if (request()->routeIs('produk')) active @endif">
                        <a class="nav-link" href="{{ route('produk') }}">DIKO</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="box"></i><span>Fitur</span></a>
                <ul class="dropdown-menu" style="display: block">
                    <li class="@if (request()->routeIs('landing.fitur')) active @endif">
                        <a class="nav-link" href="{{ route('landing.fitur') }}">Utama</a>
                    </li>
                    <li class="@if (request()->routeIs('pos.fitur')) active @endif">
                        <a class="nav-link" href="{{ route('pos.fitur') }}">Section 1 Layout 1</a>
                    </li>
                    <li class="@if (request()->routeIs('pos.fitur2')) active @endif">
                        <a class="nav-link" href="{{ route('pos.fitur2') }}">Section 2 Layout 1</a>
                    </li>
                    <li class="@if (request()->routeIs('sp.fitur')) active @endif">
                        <a class="nav-link" href="{{ route('sp.fitur') }}">Section 1 Layout 2</a>
                    </li>
                    <li class="@if (request()->routeIs('sp.fitur2')) active @endif">
                        <a class="nav-link" href="{{ route('sp.fitur2') }}">Section 2 Layout 2</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="info"></i><span>Faq</span></a>
                <ul class="dropdown-menu" style="display: block">
                    <li class="@if (request()->routeIs('faq')) active @endif">
                        <a class="nav-link" href="{{ route('faq') }}">Utama</a>
                    </li>
                    <li class="@if (request()->routeIs('sp.faq')) active @endif">
                        <a class="nav-link" href="{{ route('sp.faq') }}">Section Layout 2</a>
                    </li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="dollar-sign"></i><span>Pricing</span></a>
                <ul class="dropdown-menu" style="display: block">
                    <li class="@if (request()->routeIs('pospricing')) active @endif">
                        <a class="nav-link" href="{{ route('pospricing') }}">Section Layout 1</a>
                    </li>
                    <li class="@if (request()->routeIs('sppricing')) active @endif">
                        <a class="nav-link" href="{{ route('sppricing') }}">Section Layout 2</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="layers"></i><span>Plugin</span></a>
                <ul class="dropdown-menu" style="display: block">
                    <li class="@if (request()->routeIs('posPlugin')) active @endif">
                        <a class="nav-link" href="{{ route('posPlugin') }}">Section Layout 1</a>
                    </li>
                    <li class="@if (request()->routeIs('spPlugin')) active @endif">
                        <a class="nav-link" href="{{ route('spPlugin') }}">Section Layout 2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
