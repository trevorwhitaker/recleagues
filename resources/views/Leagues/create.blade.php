@extends('Layouts.main')

@section('title', ' | Add A League')

@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-2 col-md-offset-5">
		{!! Form::open(array('route' => 'leagues.store', 'data-parsley-validate' => '')) !!}
			{{ Form::label('leagueName', 'League Name', array('class' => 'addLeagueText')) }}
			{{ Form::text('leagueName', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '250')) }}

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
			'Slo-Pitch' => 'Slo-Pitch',
			'Soccer' => 'Soccer', 
			'VolleyBall' => 'VolleyBall'], null, ['placeholder' => '', 'class' => 'form-control', 'required' => '']) }}

			{{ Form::label('type', 'Gender', array('class' => 'addLeagueText')) }}
			{{ Form::select('type', [
			'Male' => 'Male',
			'Female' => 'Female',
			'Co-op' => 'Co-op'], null, ['placeholder' => '', 'class' => 'form-control', 'required' => '']) }}

			{{ Form::label('website', 'Website (if available)', array('class' => 'addLeagueText')) }}
			{{ Form::text('website', null, array('class' => 'form-control', 'maxlength' => '250', 'type' => 'url')) }}

			{{ Form::label('person', 'Contact Name', array('class' => 'addLeagueText')) }}
			{{ Form::text('person', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '100')) }}

			{{ Form::label('phone', 'Contact Phone Number', array('class' => 'addLeagueText')) }}
			{{ Form::text('phone', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '20', 'pattern' => "^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$", 'data-parsley-error-message' => "Please enter in the format XXX-XXX-XXXX")) }}

			{{ Form::label('email', 'Contact Email Address', array('class' => 'addLeagueText')) }}
			{{ Form::text('email', null, array('class' => 'form-control', 'type' => 'email', 'required' => '', 'maxlength' => '100')) }}

			{{ Form::label('description', 'Description', array('class' => 'addLeagueText')) }}
			{{ Form::textarea('description', null, array('class' => 'form-control', 'style' => 'resize: none;', 'maxlength' => '100')) }}

			{{ Form::submit('Submit', array('class' => 'btn btn-primary center-block')) }}

		{!! Form::close() !!}
	</div>
</div>

@endsection

@section('scripts')
	{!! Html::script('js/parsley.min.js') !!}

	<script>
      function countChar(val) {
        var len = val.value.length;
        if (len >= 250) {
          val.value = val.value.substring(0, 250);
        } else {
          $('#charNum').text(250 - len);
        }
      };
    </script>
@endsection