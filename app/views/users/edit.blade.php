@extends('master')

@section('title')

Edit profile

@stop

@section('content')
{{Form::open(array(
	'route' => array('userUpdate','apsdehal'))) }}

<div id="info">
{{Form::label('info[full_name]', 'Full Name')}}
{{Form::text('info[full_name]') }}

{{Form::label('info[email]', 'Email')}}
{{Form::text('info[email]') }}

{{ '<br/>' }}

{{Form::label('info[phone_no]', 'Phone No')}}
{{Form::text('info[phone_no]') }}

{{Form::label('info[website]', 'Website')}}
{{Form::text('info[website]') }}

{{ '<br/>' }}

{{Form::label('info[address_line1]', 'Address Line 1')}}
{{Form::text('info[address_line1]') }}

{{Form::label('info[address_line2]', 'Address Line 2')}}
{{Form::text('info[address_line2]') }}

{{ '<br/>' }}

{{Form::label('info[photo]', 'Photo')}}
{{Form::file('info[photo]') }}

{{Form::label('info[youtubelink]', 'Youtube Link')}}
{{Form::text('info[youtubelink]') }}

{{ '<br/>' }}

{{ Form::submit('Save')}}
</div>

{{ '<br/>' }}

<div id="work">

{{Form::label('work[][job_title]', 'Job Title')}}
{{Form::text('work[][job_title]') }}

{{Form::label('work[][company]', 'Company')}}
{{Form::text('work[][company]') }}

{{ '<br/>' }}

{{Form::label('work[][start_date]', 'Start Date')}}
{{Form::text('work[][start_date]') }}

{{Form::label('work[][end_date]', 'End Date')}}
{{Form::text('work[][end_date]') }}

{{ '<br/>' }}

{{Form::label('work[][other_info]', 'Other Info')}}
{{Form::textarea('work[][other_info]') }}

{{ Form::submit('Save')}}
</div>

{{ '<br/>' }}

<div id="edu">

{{Form::label('edu[][course_name]', 'Course Name')}}
{{Form::text('edu[][course_name]') }}

{{Form::label('edu[][institution]', 'Institution Name')}}
{{Form::text('edu[][institution]') }}

{{ '<br/>' }}

{{Form::label('edu[][start_date]', 'Start Date')}}
{{Form::text('edu[][start_date]') }}

{{Form::label('edu[][end_date]', 'End Date')}}
{{Form::text('edu[][end_date]') }}

{{ '<br/>' }}

{{Form::label('edu[][other_info]', 'Other Info')}}
{{Form::textarea('edu[][other_info]') }}

{{ Form::submit('Save')}}
</div>

{{ '<br/>' }}

<div id="interests">

{{Form::label('interests[interests]', 'Interests')}}
{{Form::textarea('interests[interests]') }}

{{ Form::submit('Save')}}
</div>

{{ '<br/>' }}

<div id="ref">

{{Form::label('refs[refs]', 'References')}}
{{Form::textarea('refs[refs]') }}

{{ Form::submit('Save')}}
</div>

{{ '<br/>' }}

<div id="other">

{{Form::label('other[][info]', 'Other')}}
{{Form::textarea('other[][info]') }}

{{ Form::submit('Save')}}
</div>
@stop