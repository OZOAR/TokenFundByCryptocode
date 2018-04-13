<form method="post" action="{{ $route }}" id="{{ $formId }}"
      class="form-horizontal form-label-left" enctype="multipart/form-data">

    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('excel-data-file') ? ' has-error' : '' }}">
        <div class="input-group">
            <input type="file" class="form-control" name="excel-data-file" required>
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                    @lang('dashboard.button.update')
                </button>
            </span>
        </div>
        <div class="checkbox graph-checkbox">
            <label class="">
                <div class="icheckbox_flat-green checked" style="position: relative;">
                    <input name="is-preview" type="checkbox" class="flat" value="1" checked
                           style="position: absolute; opacity: 0;">
                    <ins class="iCheck-helper statistics-icheck-helper"></ins>
                </div>
                <span>@lang('dashboard.statistics.preview')</span>
            </label>
        </div>
        @if ($errors->has('excel-data-file'))
            <span class="help-block">
                <strong>{{ $errors->first('excel-data-file') }}</strong>
            </span>
        @endif
        @if ($errors->has('is-preview'))
            <span class="help-block">
                <strong>{{ $errors->first('is-preview') }}</strong>
            </span>
        @endif
    </div>
</form>