<table class="table table-striped no-margin">
    <thead>
    <tr>
        <th>#</th>
        <th>@lang('dashboard.requests.model.owner')</th>
        <th>@lang('dashboard.requests.model.created_at')</th>
        <th>@lang('dashboard.requests.model.message')</th>
        <th>@lang('dashboard.headers.action')</th>
    </tr>
    </thead>
    <tbody>

    @foreach($requests as $request)
        <tr>
            <td>{{ $request->getId() }}</td>
            <td>
                <a href="{{ route('dashboard.users.show', ['id' => $request->owner->getId()]) }}">
                    <strong>{{ $request->owner->getName() }}</strong>
                </a>
            </td>
            <td>{{ $request->getCreatedDate() }}</td>
            <td>{{ str_limit($request->getMessage(), 110) }}</td>
            <td>
                <a href="{{ route('dashboard.requests.show', ['id' => $request->getId()]) }}"
                   class="btn btn-primary btn-xs">
                    <i class="fa fa-folder"></i> @lang('dashboard.button.view')
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
