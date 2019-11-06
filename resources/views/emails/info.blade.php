@component('mail::message')
# {{$content->purpose}}

<strong>Name: {{$content->name}}</strong><br>
<strong>Name: {{$content->email}}</strong><br>

{{$content->message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
