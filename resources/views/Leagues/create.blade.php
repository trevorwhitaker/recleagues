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
			'Flag Football' => 'Flag Football',
			'Hockey' => 'Hockey',
			'Ball Hockey' => 'Ball Hockey',
			'Ultimate Frisbee' => 'Ultimate Frisbee',
			'Slo-Pitch' => 'Slo-Pitch',
			'Soccer' => 'Soccer', 
			'Volleyball' => 'Volleyball',
			'Basketball' => 'Basketball'], null, ['placeholder' => '', 'class' => 'form-control', 'required' => '']) }}

			<div style="text-align: left;">
			{{ Form::checkbox('type[0]', 'Male', false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
			<span class="gender-text">Male</span>
			<br>
			{{ Form::checkbox('type[1]', 'Female', false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
			<span class="gender-text">Female</span>
			<br>
			{{ Form::checkbox('type[2]', 'Coed', false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
			<span class="gender-text">Coed</span>
			</div>
			<div>
			{{ Form::checkbox('type[3]', 'Youth - Boys', false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
			<span class="gender-text">Youth - Boys</span>
			</div>
			<div>
			{{ Form::checkbox('type[4]', 'Youth - Girls', false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
			<span class="gender-text">Youth - Girls</span>
			</div>

			<br>

			{{ Form::label('email', 'Contact Email Address', array('class' => 'addLeagueText')) }}
			{{ Form::text('email', null, array('class' => 'form-control', 'type' => 'email', 'required' => '', 'maxlength' => '100')) }}

			<br>
			<p style="font-weight: 700; font-size: 31px; text-align: center;"> Optional Fields </p>
			<br>

			{{ Form::label('website', 'Website', array('class' => 'addLeagueText')) }}
			{{ Form::text('website', null, array('class' => 'form-control', 'maxlength' => '250')) }}

			{{ Form::label('person', 'Contact Name', array('class' => 'addLeagueText')) }}
			{{ Form::text('person', null, array('class' => 'form-control', 'maxlength' => '100')) }}

			{{ Form::label('phone', 'Contact Phone Number', array('class' => 'addLeagueText')) }}
			{{ Form::text('phone', null, array('class' => 'form-control', 'maxlength' => '20', 'pattern' => "^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$", 'data-parsley-error-message' => "Please enter in the format XXX-XXX-XXXX")) }}

			{{ Form::label('description', 'League Description', array('class' => 'addLeagueText')) }}
			{{ Form::textarea('description', null, array('class' => 'form-control', 'style' => 'resize: none;', 'maxlength' => '250')) }}

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