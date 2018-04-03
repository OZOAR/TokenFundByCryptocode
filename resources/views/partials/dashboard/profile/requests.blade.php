<table class="table table-striped no-margin">
    <thead>
    <tr>
        <th class="col-md-1">#</th>
        <th class="col-md-3">@lang('dashboard.requests.model.created_at')</th>
        <th class="col-md-8">@lang('dashboard.requests.model.message')</th>
    </tr>
    </thead>
    <tbody>

    @foreach($requests as $request)
    <tr>
        <td>{{ $request->getId() }}</td>
        <td>{{ $request->getCreatedDate() }}</td>
        <td>{{ $request->getMessage() }}</td>
    </tr>
    @endforeach
    </tbody>
</table>