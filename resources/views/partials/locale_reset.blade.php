<form action="{{ route('locale.reset') }}">
    <select name="lang" onchange="this.form.submit()">
        <option value="en">en</option>
        <option value="ru" {{ Session::get('locale') === 'ru' ? 'selected' : '' }}>ru</option>
    </select>
</form>