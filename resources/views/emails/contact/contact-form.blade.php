@component('mail::message')
# Une nouvelle demande reçue !

<strong>Nom : </strong> {{ $data['name'] }}<br />
<strong>Email : </strong> {{ $data['email'] }}<br />
<strong>Message : </strong> {{ $data['message'] }}<br />

@component('mail::button', ['url' => ''])
Panel admin
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
