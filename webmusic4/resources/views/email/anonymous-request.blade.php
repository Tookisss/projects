@component('mail::message')
Thank you for message!

We will respond to you as soon as posible.

Meanwhile you can register to Music Library and add, update and delete uploads!
Click button below and start your journey!

@component('mail::button', ['url' => 'http://127.0.0.1:8000/register'])
Registration
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
