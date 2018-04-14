<form action="{{ route('locale.reset') }}">
    <select name="lang" onchange="this.form.submit()">
        @foreach($locales as $locale)
            <option value="{{$locale}}" {{ Session::get('locale') === $locale ? 'selected' : '' }}>{{$locale}}</option>
        @endforeach
    </select>
</form>