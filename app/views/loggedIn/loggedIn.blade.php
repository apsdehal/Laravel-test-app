@section('title')

Hi!

@stop

@section('content')

<?php $user = User::currentLoggedIn() ?>

{{ Info::showInfo($user) }}

{{ Work::showWork($user) }}

{{ Edu::showEdu($user) }}

{{ Ref::showRef($user) }}

{{Interest::showInterest($user) }}

{{ 'Hello'.' '. $user->first_name }}

{{ HTML::link('/'.$user->username, 'Profile') }}

{{ HTML::link('/'.$user->username.'/edit', 'Edit')}}

{{ HTML::link("/logout","LogOut") }}

@stop