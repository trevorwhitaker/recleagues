@extends('Layouts.main')

@section('title', ' | Add A League')

@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		{!! Form::open(array('route' => 'leagues.deny')) !!}
			
			{{ Form::hidden('id', $league->id) }}
			{{ Form::hidden('authToken', $league->authToken) }}

			{{ Form::label('reason', 'Reason for Denial', array('class' => 'addLeagueText')) }}
			{{ Form::textarea('reason', null, array('class' => 'form-control', 'style' => 'resize: none;', 'maxlength' => '250')) }}

			{{ Form::submit('Submit', array('class' => 'btn btn-primary center-block')) }}

		{!! Form::close() !!}
	</div>
</div>

@endsection