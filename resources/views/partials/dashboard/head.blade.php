<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    @include('partials.dashboard.top_menu')
                </li>
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        @include('partials.locale_reset')
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->