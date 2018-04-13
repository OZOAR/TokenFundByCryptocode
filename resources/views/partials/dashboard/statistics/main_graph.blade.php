<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>@lang('dashboard.statistics.main_graph_title')</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <div class="col-md-12">
                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active">
                              <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab"
                                 aria-expanded="true">
                                  USD
                              </a>
                          </li>
                          <li role="presentation">
                              <a href="#tab_content2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">
                                  BTC
                              </a>
                          </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1">
                              <div id="tokenChartUSD" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                              <div id="tokenChartBTC" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-12">
                    <!-- TODO change to AJAX query -->
                    @include('partials.dashboard.statistics.upload_form',
                        ['route' => route('dashboard.statistics.upgrade.graph.main'),
                            'formId' => 'upload-main-graph-form'])
                </div>
            </div>
        </div>
    </div>
</div>
