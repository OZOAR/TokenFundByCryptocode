@extends('layouts.dashboard', ['pageTitle' => __('dashboard.requests.title')])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>@lang('dashboard.requests.title')</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive"> <!-- TODO fix responsive -->
                        @if(count($requests))
                            @include('dashboard.requests.list')
                        @else
                            @lang('dashboard.requests.empty_collection')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            {{ $requests->links() }}
        </div>
    </div>
@endsection
