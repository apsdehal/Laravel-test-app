@extends('master')


{{ $info }}
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
<?php $i =0; ?>


@if(count($work) != 0)


@foreach($work as $w)
{{Form::label('work['.$i.'job_title]', 'Job Title')}}
{{Form::text('work['.$i.'][job_title]') }}

{{Form::label('work['.$i.'][company]', 'Company')}}
{{Form::text('work['.$i.'][company]') }}

{{ '<br/>' }}

{{Form::label('work['.$i'][start_date]', 'Start Date')}}
{{Form::text('work['.$i.'][start_date]') }}

{{Form::label('work['.$i.'][end_date]', 'End Date')}}
{{Form::text('work['.$i.'][end_date]') }}

{{ '<br/>' }}

{{Form::label('work['.$i.'][other_info]', 'Other Info')}}
{{Form::textarea('work['.$i.'][other_info]') }}

{{Form::hidden('work['.$i.'][work_id]',$w->work_id)}}
<?php $i++; ?>

@endforeach
{{ Form::submit('Save')}}

@else

{{Form::label('work['.$i.'][job_title]', 'Job Title')}}
{{Form::text('work['.$i.'][job_title]') }}

{{Form::label('work['.$i.'][company]', 'Company')}}
{{Form::text('work['.$i.'][company]') }}

{{ '<br/>' }}

{{Form::label('work['.$i.'][start_date]', 'Start Date')}}
{{Form::text('work['.$i.'][start_date]') }}

{{Form::label('work['.$i.'][end_date]', 'End Date')}}
{{Form::text('work['.$i.'][end_date]') }}

{{ '<br/>' }}

{{Form::label('work['.$i.'][other_info]', 'Other Info')}}
{{Form::textarea('work['.$i.'][other_info]') }}

{{ Form::submit('Save')}}
<?php $i++; ?>
@endif
</div>

{{ '<br/>' }}

<div id="edu">
<?php $j =0 ?>
@if( count($edu) != 0)

@foreach($edu as $e)
{{Form::label('edu['.$j.'][course_name]', 'Course Name')}}
{{Form::text('edu['.$j.'][course_name]') }}

{{Form::label('edu['.$j.'][institution]', 'Institution Name')}}
{{Form::text('edu['.$j.'][institution]') }}

{{ '<br/>' }}

{{Form::label('edu['.$j.'][start_date]', 'Start Date')}}
{{Form::text('edu['.$j.'][start_date]') }}

{{Form::label('edu['.$j.'][end_date]', 'End Date')}}
{{Form::text('edu['.$j.'][end_date]') }}

{{ '<br/>' }}

{{Form::label('edu['.$j.'][other_info]', 'Other Info')}}
{{Form::textarea('edu['.$j.'][other_info]') }}

{{Form::hidden('edu[][edu_id]',$e->edu_id)}}

<?php $j++; ?>
@endforeach

{{ Form::submit('Save')}}

@else

{{Form::label('edu['.$j.'][course_name]', 'Course Name')}}
{{Form::text('edu[][course_name]') }}

{{Form::label('edu['.$j.'][institution]', 'Institution Name')}}
{{Form::text('edu['.$j.'][institution]') }}

{{ '<br/>' }}

{{Form::label('edu['.$j.'][start_date]', 'Start Date')}}
{{Form::text('edu['.$j.'][start_date]') }}

{{Form::label('edu['.$j.'][end_date]', 'End Date')}}
{{Form::text('edu['.$j.'][end_date]') }}

{{ '<br/>' }}

{{Form::label('edu['.$j.'][other_info]', 'Other Info')}}
{{Form::textarea('edu['.$j.'][other_info]') }}

{{Form::submit('Save')}}

@endif
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
<?php $k=0; ?>
@if( count($other) != 0)
<div id="other">


@foreach($other as $o)
{{Form::label('other['.$k.'][info]', 'Other')}}
{{Form::textarea('other['.$k.'][info]') }}

{{Form::hidden('other['.$k.'][other_id]',$o->other_id)}}
<?php $k++ ?>
{{ Form::submit('Save')}}

@endforeach
</div>

@else

<div id="other">

{{Form::label('other['.$k.'][info]', 'Other')}}
{{Form::textarea('other['.$k.'][info]') }}

{{ Form::submit('Save')}}

<?php $k++; ?>
</div>

@endif
@stop