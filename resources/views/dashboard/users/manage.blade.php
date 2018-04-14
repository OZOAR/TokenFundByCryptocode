@extends('layouts.dashboard', ['pageTitle' => __('dashboard.users.manage')])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('dashboard.users.register') }}">
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
                    <div class="table-responsive"> <!-- TODO fix responsive -->
                        @if(count($users))
                            @include('dashboard.users.list')
                        @else
                            @lang('dashboard.users.empty_collection')
                        @endif
                    </div>
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
