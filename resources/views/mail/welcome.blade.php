@component('mail::table')
    | Laravel       | Table         | Example  |
    | ------------- |:-------------:| --------:|
    | Col 2 is      | Centered      | $10      |
    | Col 3 is      | Right-Aligned | $20      |
@endcomponent

@component('mail::message')
# Code With Sief

Welcome To Code With Sief.

@component('mail::button', ['url' => 'https://www.codewithsief.com'])
Visit Me!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
