@extends('master')

@section('title')
{{ 'Login' }}
@stop

@section('content')
{{ Form::open(array(
	'url' => '/login',
	'method' => 'post'
)) }}

{{ Form::label('username','Username')}}

{{ Form::text('username')}}

{{ Form::label('password','Password')}}

{{ Form::password('password')}}

{{ Form::submit('Submit') }}

{{ Form::close()}}

@stop
