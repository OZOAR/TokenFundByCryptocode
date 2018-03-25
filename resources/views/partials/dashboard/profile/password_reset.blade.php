<form id="profile-password-reset" data-parsley-validate class="form-horizontal form-label-left">
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">@lang('dashboard.auth.profile.password') <span class="required">*</span></label>
        <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="password" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">@lang('dashboard.auth.profile.password_confirmation') <span
                    class="required">*</span></label>
        <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="password" name="password-confirmation" class="form-control" required="required">
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button type="submit" class="btn btn-success">@lang('dashboard.button.reset')</button>
        </div>
    </div>
</form>