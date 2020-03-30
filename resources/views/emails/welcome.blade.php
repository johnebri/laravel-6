@component('mail::message')
# Thank you for registering

Click on the button to activate your account

@component('mail::button', ['url' => ''])
Activate Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
