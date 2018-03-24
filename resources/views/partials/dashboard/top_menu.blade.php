<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
   aria-expanded="false">
    <!-- TODO change user image -->
    <img src="/images/img.jpg" alt="">{{ Auth::user()->getName() }}
    <span class="fa fa-angle-down"></span>
</a>
<ul class="dropdown-menu dropdown-usermenu pull-right">
    <li><a href="">@lang('dashboard.auth.profile')</a></li>
    <li><a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                    class="fa fa-sign-out pull-right"></i> @lang('dashboard.auth.logout')</a>
    </li>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</ul>