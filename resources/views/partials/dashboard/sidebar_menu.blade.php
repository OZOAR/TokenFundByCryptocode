<ul class="nav side-menu">
    <li><a href="{{ route('dashboard.index') }}">
            <i class="fa fa-home"></i> @lang('dashboard.sidebar.menu.home')
        </a>
    </li>
    <li><a><i class="fa fa-user"></i> @lang('dashboard.sidebar.menu.users.index') <span
                    class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="{{ route('dashboard.users.manage') }}">@lang('dashboard.sidebar.menu.users.manage')</a></li>
            <li><a href="/">@lang('dashboard.sidebar.menu.users.register')</a></li> <!-- TODO change link -->
        </ul>
    </li>
    <li><a><i class="fa fa-bell"></i> @lang('dashboard.sidebar.menu.requests')</a></li> <!-- TODO change link -->
    <li><a><i class="fa fa-bar-chart-o"></i> @lang('dashboard.sidebar.menu.statistics')</a></li> <!-- TODO change link -->
</ul>