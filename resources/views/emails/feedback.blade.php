@component('mail::message')
# Contact Us Message

Thank you for your feedback {{ $feedback->name }}

# Your Message
<p>
    {{ $feedback->message }}
</p>

# Reply From Admin

<p>
    {{$feedback->answer}}
</p>
@component('mail::button', ['url' => route('login')])
Login to your jempol account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
