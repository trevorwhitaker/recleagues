@extends('Layouts.main')

@section('title', ' | Admin Add A League')

@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		{!! Form::open(array('route' => 'leagues.adminStore', 'data-parsley-validate' => '')) !!}
			@include('Partials._addLeagueForm')

			{{ Form::submit('Submit', array('class' => 'btn btn-primary center-block')) }}

		{!! Form::close() !!}
	</div>
</div>

@endsection