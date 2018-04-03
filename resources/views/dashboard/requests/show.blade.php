@extends('layouts.dashboard', ['pageTitle' => __('dashboard.requests.show_title')])

@section('content')
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 style="padding-bottom: 5px; width: 100%;">@lang('dashboard.requests.show_title')</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <!-- TODO request data here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
