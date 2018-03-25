@extends('layouts.dashboard', ['pageTitle' => __('dashboard.auth.profile.title')])

@section('content')
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>@lang('dashboard.auth.profile.title')</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="/images/default-user-image.jpg"
                                         alt="Avatar"
                                         title="Change the avatar">
                                </div>
                            </div>
                            <h3>{{ Auth::user()->getName() }}</h3>

                            <ul class="list-unstyled user_data">
                                <li>
                                    <i class="fa fa-envelope-o user-profile-icon"></i> {{ Auth::user()->getEmail() }}
                                </li>
                                <li class="m-top-xs">
                                    <i class="fa fa-user user-profile-icon"></i> @lang('dashboard.roles.'.Auth::user()->role->getSlugName())
                                </li>
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
                                        @include('partials.dashboard.profile.password_reset')
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
