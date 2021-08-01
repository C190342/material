<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('backend/img/sidebar-2.jpg') }}">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="{{ route('admin.dashboard') }}" class="simple-text logo-normal">
            {{ config('app.name') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'admin.userprofile' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.userprofile') }}">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="nav-item @if (Route::currentRouteName() == 'admin.settings') active @endif">
                <a class="nav-link" href="{{ route('admin.settings') }}">
                    <i class="material-icons">settings</i>
                    <p>Settings</p>
                </a>
            </li>
            <li class="nav-item @if (Route::currentRouteName() == 'admin.categories.index') active 
            @elseif (Route::currentRouteName() == 'admin.categories.create') active 
            @elseif (Route::currentRouteName() == 'admin.categories.edit') active
            @else ''
            @endif ">
                <a class="nav-link" href="{{ route('admin.categories.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'admin.dashboard3' ? 'active' : '' }}">
                <a class="nav-link" href="./icons.html">
                    <i class="material-icons">bubble_chart</i>
                    <p>Icons</p>
                </a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'admin.dashboard4' ? 'active' : '' }}">
                <a class="nav-link" href="./map.html">
                    <i class="material-icons">location_ons</i>
                    <p>Maps</p>
                </a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'admin.dashboard5' ? 'active' : '' }}">
                <a class="nav-link" href="./notifications.html">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>
        </ul>
    </div>
</div>