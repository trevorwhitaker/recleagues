@extends('Layouts.main')

@section('title', ' | Edit A League')

@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		{!! Form::open(array('route' => array('leagues.update', $league->id), 'data-parsley-validate' => '')) !!}

			@include('Partials._editLeagueForm')

			<div class = "captcha_container">
				{!! app('captcha')->display(); !!}
			</div>

			{{ Form::submit('Submit Change', array('class' => 'btn btn-primary center-block')) }}

		{!! Form::close() !!}
	</div>
</div>

@endsection