@section('title')

Hi!

@stop

@section('content')

<?php $user = User::currentLoggedIn() ?>

{{ Info::showInfo($user) }}

{{ Work::showWork($user) }}

{{ 'Hello'.' '. $user->first_name }}

{{ HTML::link('/'.$user->username, 'Profile') }}

{{ HTML::link("/logout","LogOut") }}

@stop