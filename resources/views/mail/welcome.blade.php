
@component('mail::message')
# Code With Sief

Welcome To Test Mail.

@component('mail::button', ['url' => 'https://www.codewithsief.com'])
Visit Me!
@endcomponent

Thanks,<br>
{{ $user }}
@endcomponent
