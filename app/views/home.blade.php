@extends('master')


@if(Auth::check())

@include('loggedIn.loggedIn')

@else

@section('title')
{{ 'Hello' }}
@stop

@section('content')

{{'Welcome'}}

{{ HTML::link('/login','Login') }}

@stop

@endif