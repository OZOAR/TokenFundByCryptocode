@if (session('success'))
    <br />
    <div class="alert alert-success">
        @lang(session('success'))
    </div>
@endif

@if(session('error'))
    <br />
    <ul class="alert alert-danger">
        @lang(session('error'))
    </ul>
@endif

@if($errors->has('client_id'))
    <br />
    <ul class="alert alert-danger">
        {{ $errors->first('client_id') }}
    </ul>
@endif