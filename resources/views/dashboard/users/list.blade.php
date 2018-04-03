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
            <td>{{ ($lastPasswordUpdate = $user->getLastPasswordUpdateDate()) ? $lastPasswordUpdate : __('dashboard.empty_field') }}</td>
            <td>
                <a href="{{ route('dashboard.users.show', ['id' => $user->getId()]) }}"
                   class="btn btn-primary btn-xs">
                    <i class="fa fa-folder"></i> @lang('dashboard.button.view')
                </a>

                <a onclick="event.preventDefault(); document.getElementById('delete-user-form-{{ $user->getId() }}').submit();" class="btn btn-danger btn-xs {{ $user->isRemoved() ? 'disabled' : '' }}">
                    <i class="fa fa-trash-o"></i> @lang('dashboard.button.delete')
                </a>

                <form id="delete-user-form-{{ $user->getId() }}" action="{{ route('dashboard.users.delete') }}"
                      method="POST" style="display: none;">
                    {{ csrf_field() }}
                    <input type="hidden" name="client_id" value="{{ $user->getId() }}">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
