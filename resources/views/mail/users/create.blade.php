@lang('mail.welcome'),

@lang('mail.information'):

@lang('mail.model.username'): {{ $user->getName() }}
@lang('mail.model.email'): {{ $user->getEmail() }}
@lang('mail.model.password'): {{ $password }}

@lang('mail.signature'),
@lang('mail.fund')