<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>@lang('dashboard.statistics.portfolio_graph_title')</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <div class="col-md-6">
                    <!-- TODO include portfolio graph -->
                    portfolio graph here
                </div>
                <div class="col-md-6">
                    <!-- TODO change to AJAX query -->
                    @include('partials.dashboard.statistics.upload_form',
                        ['route' => route('dashboard.statistics.upgrade.graph.portfolio'),
                            'formId' => 'upload-portfolio-graph-form'])
                </div>
            </div>
        </div>
    </div>
</div>