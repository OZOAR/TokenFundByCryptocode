@if (session('success'))
    <div class="alert alert-success">
        @lang(session('success'))
    </div>
@endif

@if(session('self_delete_error'))
    <ul class="alert alert-danger">
        @lang(session('self_delete_error'))
    </ul>
@endif

@if(session('already_deleted'))
    <ul class="alert alert-danger">
        @lang(session('already_deleted'))
    </ul>
@endif

@if($errors->has('client_id'))
    <ul class="alert alert-danger">
        {{ $errors->first('client_id') }}
    </ul>
@endif