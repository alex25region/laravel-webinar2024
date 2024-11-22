<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header text-uppercase text-white mt-2">Laravel-Webinar</li>
            <li class="nav-item pt-3">
                <a href="{{ route('dashboard') }}" class="nav-link {{ active_link('dashboard', 'active') }}">
                    <i class="nav-icon fa fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link {{ active_link('users.*', 'active') }}">
                    <i class="nav-icon fa fa-users"></i>
                    <p>Пользователи</p>
                </a>
            </li>
        </ul>
    </div>
</aside>
