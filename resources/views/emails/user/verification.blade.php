@component('mail::message')
# Account Verification Status

<h3>Account</h3>
<pre>
    name : {{ $user->name }}
    Identity ID : Rp. {{ $user->identity_id }}
    email : {{ $user->email }}
</pre>

<p>Your verification request is 
    @if ($user->verification_status == 'verified')
    <b style="color:green">Accepted</b>
    @elseif($user->verification_status == 'rejected')
    <b style="color:red">Rejected</b>
    @endif
    By Admin
</p>
<p>Now You Can Upload Your Product To Jempol Marketplace</p>
@component('mail::button', ['url' => route('login')])
Login Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
