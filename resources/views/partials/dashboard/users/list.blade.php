<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>@lang('dashboard.users.model.username')</th>
        <th>@lang('dashboard.users.model.email')</th>
        <th>@lang('dashboard.users.model.registration_date')</th>
        <th>@lang('dashboard.users.model.last_pass_update')</th>
        <th>@lang('dashboard.headers.action')</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->getId() }}</th>
            <td>{{ $user->getName() }}</td>
            <td>{{ $user->getEmail() }}</td>
            <td>{{ $user->getRegistrationDate() }}</td>
            <td>{{ $user->getRegistrationDate() }}</td> <!-- TODO Last password updating date -->
            <td>
                <a href="{{ route('dashboard.users.show', ['id' => $user->getId()]) }}">
                    <button type="button" class="btn btn-success btn-xs">
                        @lang('dashboard.button.view')
                    </button>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
