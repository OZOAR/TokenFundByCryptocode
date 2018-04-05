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
                        <div class="col-md-10 col-sm-12 col-xs-12 col-md-push-1">
                            <ul class="list-unstyled timeline">
                                <li>
                                    <div class="block">
                                        <div class="tags">
                                            <a href="{{ route('dashboard.users.show', ['id' => $request->owner->getId()]) }}"
                                               class="tag">
                                                <span>{{ $request->owner->getName() }}</span>
                                            </a>
                                        </div>
                                        <div class="block_content">
                                            <h2 class="title">
                                                <a>@lang('dashboard.requests.model.name') #{{ $request->getId() }}</a>
                                            </h2>
                                            <div class="byline" style="font-size: 1.02em;">
                                                <span><strong>{{ $request->owner->getEmail() }}</strong> | {{ $request->getCreatedDate() }}</span>
                                            </div>
                                            <p class="excerpt">{{ $request->getMessage() }}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
