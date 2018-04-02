@extends('layouts.dashboard', ['pageTitle' => __('dashboard.users.profile.title')])

@section('content')
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 style="padding-bottom: 5px;">@lang('dashboard.users.profile.title')
                            @if($user->isRemoved())
                                <span class="label label-danger" style="color:white; font-weight: 500">
                                    @lang('dashboard.users.profile.removed')
                                </span>
                            @endif
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="/images/default-user-image.jpg"
                                         alt="Avatar" title="Change the avatar">
                                </div>
                            </div>
                            <h3>{{ $user->getName() }}</h3>

                            <ul class="list-unstyled user_data">
                                <li>
                                    <i class="fa fa-envelope-o"></i> {{ $user->getEmail() }}
                                </li>
                                <li class="m-top-xs">
                                    <i class="fa fa-user user-profile-icon"></i> @lang('dashboard.roles.'.$user->role->getSlugName())
                                </li>
                                <!-- TODO add registration date info -->
                                <!-- TODO add last_pass_update info -->
                            </ul>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">

                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab"
                                           aria-expanded="true">
                                            @lang('dashboard.auth.profile.settings')
                                        </a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                                         aria-labelledby="home-tab">
                                        @include('partials.dashboard.profile.password_reset',
                                            ['route' => route('dashboard.users.password.reset'),
                                             'clientId' => $user->getId()])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
