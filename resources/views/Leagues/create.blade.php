@extends('Layouts.main')

@section('title', ' | Add A League')

@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

<p class="default-text"> If your league is already in our directory and you want to change the details, please check out our <a href="/FAQ/#edit-a-league">FAQ</a> seciton.</p>

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		{!! Form::open(array('route' => 'leagues.store', 'data-parsley-validate' => '')) !!}
			@include('Partials._addLeagueForm')

			<div class = "captcha_container">
				{!! app('captcha')->display(); !!}
			</div>

			{{ Form::submit('Submit', array('class' => 'btn btn-primary center-block')) }}

		{!! Form::close() !!}
	</div>
</div>

@endsection