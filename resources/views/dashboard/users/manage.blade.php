@extends('layouts.dashboard', ['pageTitle' => __('dashboard.users.manage')])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href=""> <!-- TODO change link -->
                <button type="button" class="btn btn-round btn-primary">
                    @lang('dashboard.button.register')
                </button>
            </a>
        </div>
    </div>

    @include('dashboard.users.messages')

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>@lang('dashboard.users.manage')</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @include('dashboard.users.list')
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            {{ $users->links() }}
        </div>
    </div>
@endsection
