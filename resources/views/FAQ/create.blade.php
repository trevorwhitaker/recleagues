@extends('Layouts.main')

@section('title', ' | Add A FAQ')

@section('content')


<div class="row">
	<div class="col-md-4 col-md-offset-4">
		{!! Form::open(array('route' => 'faq.store')) !!}
			{{ Form::label('header', 'Header', array('class' => 'addLeagueText')) }}
			{{ Form::text('header', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '250')) }}

			{{ Form::label('body', 'Body', array('class' => 'addLeagueText')) }}
			{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

			{{ Form::submit('Submit', array('class' => 'btn btn-primary center-block')) }}

		{!! Form::close() !!}
	</div>
</div>

@endsection