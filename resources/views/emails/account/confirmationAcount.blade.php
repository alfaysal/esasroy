@component('mail::message')
# Introduction

Your account is activated your password is {{ $password }}

@component('mail::button', ['url' => '/admin/login'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
