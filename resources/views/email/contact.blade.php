@component('mail::message')
#message system

a msg from
{{$data['email']}}:
<br>
<br>
"{{$data['msg']}}"
<br>
<br>
you don't care do you?
@endcomponent
