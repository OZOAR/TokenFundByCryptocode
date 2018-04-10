<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>@lang('dashboard.statistics.main_graph_title')</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <div class="col-md-6">
                    <!-- TODO include graph -->
                    graph here
                </div>
                <div class="col-md-6">
                    <!-- TODO change to AJAX query -->
                    <form method="post" action="{{ route('dashboard.statistics.upgrade.graph.first') }}" id="upload-first-graph-form"
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
                </div>
            </div>
        </div>
    </div>
</div>