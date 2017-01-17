@extends('Layouts.main')

@section('title', ' | Add A League')

@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		{!! Form::open(array('route' => 'comments.store', 'data-parsley-validate' => '')) !!}
			{{ Form::label('name', 'Name', array('class' => 'addLeagueText')) }}
			{{ Form::text('name', null, array('class' => 'form-control', 'maxlength' => '100')) }}

			{{ Form::label('subject', 'Topic', array('class' => 'addLeagueText')) }}
			{{ Form::text('subject', null, array('class' => 'form-control', 'maxlength' => '100')) }}

			{{ Form::label('email', 'Return Email (Not Displayed)', array('class' => 'addLeagueText')) }}
			{{ Form::text('email', null, array('class' => 'form-control', 'type' => 'email', 'required' => '', 'maxlength' => '100')) }}

			{{ Form::label('city', 'City', array('class' => 'addLeagueText')) }}
			{{ Form::text('city', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '50')) }}

			{{ Form::label('province', 'Province', array('class' => 'addLeagueText', 'required' => '')) }}
			{{ Form::select('province', [
			'Alberta' => 'Alberta',
			'British Columbia' => 'British Columbia',
			'Manitoba' => 'Manitoba',
			'New Brunswick'=> 'New Brunswick',
			'Newfoundland' => 'Newfoundland',
			'Nova Scotia' => 'Nova Scotia', 
			'Ontario' => 'Ontario',
			'Prince Edward Island' => 'Prince Edward Island',
			'Quebec' => 'Quebec',
			'Saskatchewan' => 'Saskatchewan'], null, ['placeholder' => '', 'class' => 'form-control', 'required' => '']) }}

			{{ Form::label('sport', 'Sport', array('class' => 'addLeagueText')) }}
			{{ Form::select('sport', [
			'Baseball' => 'Baseball',
			'Fast-Pitch' => 'Fast-Pitch',
			'Football' => 'Football',
			'Hockey' => 'Hockey',
			'Ball Hockey' => 'Ball Hockey',
			'Ultimate Frisbee' => 'Ultimate Frisbee',
			'Slo-Pitch' => 'Slo-Pitch',
			'Soccer' => 'Soccer', 
			'Volleyball' => 'Volleyball',
			'Basketball' => 'Basketball',
			'General' => 'General'], null, ['placeholder' => '', 'class' => 'form-control', 'required' => '']) }}

			{{ Form::label('password', 'Password (This will be used to edit your message in the future)', array('class' => 'addLeagueText')) }}
			{{ Form::password('password', array('class' => 'form-control')) }}

			{{ Form::label('message', 'Message', array('class' => 'addLeagueText')) }}
			{{ Form::textarea('message', null, array('class' => 'form-control', 'style' => 'resize: none;', 'maxlength' => '1000')) }}

			<div class = "captcha_container">
				{!! app('captcha')->display(); !!}
			</div>

			{{ Form::submit('Submit', array('class' => 'btn btn-primary center-block')) }}

		{!! Form::close() !!}
	</div>
</div>

@endsection

@section('scripts')
	{!! Html::script('js/parsley.min.js') !!}
@endsection