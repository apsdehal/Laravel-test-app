@extends('master')

@section('title')

{{ 'SignUp'}}

@stop

@section('content')

{{ Form::open(array('method'=>'post', 'url'=>'/store')) }}

{{ Form::label('username', 'Username') }}

{{ Form::text('username', Input::old('username'), array('placeholder' => 'Must be unique')) . '<br/>' }}

@foreach($errors->get('username','<li>:message</li>') as $message)

	{{ $message }}

@endforeach

{{ Form::label('first_name', 'First Name') }}

{{ Form::text('first_name', Input::old('first_name')) . '<br/>' }}

@foreach($errors->get('first_name','<li>:message</li>') as $message)

	{{ $message }}

@endforeach

{{ Form::label('last_name', 'Last Name') }}

{{ Form::text('last_name', Input::old('last_name')) . '<br/>' }}

@foreach($errors->get('last_name','<li>:message</li>') as $message)

	{{ $message }}

@endforeach

{{ Form::label('email', 'Email') }}

{{ Form::email('email', Input::old('email')) . '<br/>' }}

@foreach($errors->get('email','<li>:message</li>') as $message)

	{{ $message }}

@endforeach

{{ Form::label('password', 'Password') }}

{{ Form::password('password') . '<br/>' }}

@foreach($errors->get('password','<li>:message</li>') as $message)

	{{ $message }}

@endforeach

{{ Form::label('password2', 'Repeat Password') }}

{{ Form::password('password2') . '<br/>' }}

@foreach($errors->get('password2', '<li>:message</li>') as $message)

	{{ $message }}

@endforeach

{{ Form::submit('SignUp') }}

{{ Form::close() }}

@stop