@extends('layouts.dashboard', ['pageTitle' => __('dashboard.users.register')])

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>@lang('dashboard.users.register')</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form method="post" action="{{ route('dashboard.users.register.post') }}" id="register-form" data-parsley-validate class="form-horizontal form-label-left">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">
                                @lang('dashboard.users.model.username') <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ old('username') }}" minlength="3" name="username" id="username" required="required"
                                       class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">
                                @lang('dashboard.users.model.email') <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="email" value="{{ old('email') }}" name="email" required="required"
                                       class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                @lang('dashboard.users.model.password') <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" id="password" name="password" class="form-control" minlength="6"
                                       data-parsley-equalto="#password_confirmation" required="required">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">@lang('dashboard.auth.profile.password_confirmation')
                                <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                       class="form-control"
                                       minlength="6" data-parsley-equalto="#password" required="required">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">@lang('dashboard.button.register')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
