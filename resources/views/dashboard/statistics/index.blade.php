@extends('layouts.dashboard', ['pageTitle' => __('dashboard.statistics.title')])

@section('content')
    <!-- Statistics content here -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>@lang('dashboard.statistics.title')</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <!-- TODO change route to upload -->
                    <form method="post" action="route-here" id="register-form" data-parsley-validate
                          class="form-horizontal form-label-left">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('btc-price') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usd-price">
                                <!-- TODO change to lang -->
                                Token price in USD <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <!-- TODO change value tag to format "{ db() or old() }" -->
                                <input type="number" min="0" step="0.5" value="{{ old('usd-price') }}" name="usd-price"
                                       id="usd-price"
                                       required="required"
                                       class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('usd-price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usd-price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('btc-price') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="btc-price">
                                <!-- TODO change to lang -->
                                Token price in BTC <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" min="0" step="0.5" value="{{ old('btc-price') }}" name="btc-price"
                                       id="btc-price"
                                       required="required"
                                       class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('btc-price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('btc-price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('funds-yields') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="funds-yields">
                                <!-- TODO change to lang -->
                                Funds yields <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" min="0" step="0.5" value="{{ old('funds-yields') }}"
                                       name="funds-yields"
                                       id="funds-yields"
                                       required="required"
                                       class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('funds-yields'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('funds-yields') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit"
                                        class="btn btn-success">@lang('dashboard.button.update')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('partials.dashboard.statistics.first_graph')
    @include('partials.dashboard.statistics.second_graph')
@endsection
