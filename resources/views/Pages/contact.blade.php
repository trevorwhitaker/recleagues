@extends('Layouts.main')

@section('content')

@section('title', ' | Contact Us')

<p class="default-text">Have a question or a request?</p>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		{!! Form::open(array('route' => 'pages.sendContact', 'data-parsley-validate' => '')) !!}
			{{ Form::label('email', 'Return Email Address', array('class' => 'addLeagueText')) }}
			{{ Form::text('email', null, array('class' => 'form-control', "placeholder" => "", 'data-parsley-type' => 'email', 'required' => '', 'maxlength' => '100')) }}

			{{ Form::label('text', 'Question/Request', array('class' => 'addLeagueText')) }}
			{{ Form::textarea('text', null, array('class' => 'form-control', 'style' => 'resize: none;', "placeholder" => "Enter your message here...", 'required' => '', 'maxlength' => '400', 'minlength' => '10')) }}
			<div class = "captcha_container">
				{!! app('captcha')->display(); !!}
			</div>
							
			{{ Form::submit('Submit', array('class' => 'btn btn-primary center-block')) }}

		{!! Form::close() !!}
	</div>
</div>

@endsection