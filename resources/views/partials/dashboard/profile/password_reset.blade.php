<form action="{{ route('dashboard.profile.password.reset') }}" method="POST" id="profile-password-reset"
      data-parsley-validate class="form-horizontal form-label-left">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('old_password') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">@lang('dashboard.auth.profile.old_password') <span
                    class="required">*</span></label>
        <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="password" name="old_password" class="form-control" minlength="6" required="required">
            @if ($errors->has('old_password'))
                <span class="help-block">
                    <strong>{{ $errors->first('old_password') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">@lang('dashboard.auth.profile.password') <span
                    class="required">*</span></label>
        <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="password" id="password" name="password" class="form-control" minlength="6" data-parsley-equalto="#password_confirmation" required="required">
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
        <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" minlength="6" data-parsley-equalto="#password" required="required">
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
            <button type="submit" class="btn btn-success">@lang('dashboard.button.reset')</button>
        </div>
    </div>
</form>