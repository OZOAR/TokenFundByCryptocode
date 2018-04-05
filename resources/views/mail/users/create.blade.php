<div>
    @lang('mail.welcome'),<br/>
    <br/>
    @lang('mail.information'):<br/>
    <br/>
    @lang('mail.model.username'): {{ $user->getName() }}<br/>
    @lang('mail.model.email'): {{ $user->getEmail() }}<br/>
    @lang('mail.model.password'): {{ $password }}<br/>
    <br/>
    @lang('mail.signature'),<br/>
    @lang('mail.fund')
</div>