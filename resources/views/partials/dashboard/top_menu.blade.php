<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
   aria-expanded="false">
    <img src="/images/img.jpg" alt="">{{ Auth::user()->getName() }} <!-- TODO change user image -->
    <span class=" fa fa-angle-down"></span>
</a>
<ul class="dropdown-menu dropdown-usermenu pull-right">
    <!-- TODO menu list -->
    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
</ul>