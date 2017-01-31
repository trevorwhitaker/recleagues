@extends('Layouts.main')

@section('title', ' | Admin Edit A League')

@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		{!! Form::open(['route' => ['leagues.destroy', $league->id], 'method' => 'DELETE']) !!}
		{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
		{!! Form::close() !!}

		{!! Form::open(array('route' => array('leagues.adminUpdate', $league->id), 'data-parsley-validate' => '')) !!}

			@include('Partials._editLeagueForm')

		{{ Form::submit('Submit Change', array('class' => 'btn btn-primary center-block')) }}

		{!! Form::close() !!}
	</div>
</div>

@endsection