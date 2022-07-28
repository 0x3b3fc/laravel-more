@component('mail::message')
# Hi: {{$user->name}}

<h2>مرحبا بك في موقع كود مع سيف</h2>.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
