@extends('Layouts.main')

@section('title', ' | Add A League')

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
			{{ Form::label('leaguename', 'League Name', array('class' => 'addLeagueText')) }}
			{{ Form::text('leaguename', $league->leaguename, array('class' => 'form-control', 'required' => '', 'maxlength' => '250')) }}

			{{ Form::label('city', 'City', array('class' => 'addLeagueText')) }}
			{{ Form::text('city', $league->city, array('class' => 'form-control', 'required' => '', 'maxlength' => '50')) }}

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
			'Saskatchewan' => 'Saskatchewan'], $league->province, ['placeholder' => '', 'class' => 'form-control', 'required' => '']) }}

			{{ Form::label('sport', 'Sport', array('class' => 'addLeagueText')) }}
			{{ Form::select('sport', [
			'Baseball' => 'Baseball',
			'Fast-Pitch' => 'Fast-Pitch',
			'Flag Football' => 'Flag Football',
			'Hockey' => 'Hockey',
			'Ultimate Frisbee' => 'Ultimate Frisbee',
			'Ball Hockey' => 'Ball Hockey',
			'Slo-Pitch' => 'Slo-Pitch',
			'Soccer' => 'Soccer', 
			'Volleyball' => 'Volleyball',
			'Basketball' => 'Basketball'], $league->sport, ['placeholder' => '', 'class' => 'form-control', 'required' => '']) }}

			<div style="text-align: left;">
			{{ Form::checkbox('type[0]', 'Male', strpos($league->type, 'Male') !== false ? true : false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
			<span class="gender-text">Male</span>
			<br>
			{{ Form::checkbox('type[1]', 'Female', strpos($league->type, 'Female') !== false ? true : false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
			<span class="gender-text">Female</span>
			<br>
			{{ Form::checkbox('type[2]', 'Coed', strpos($league->type, 'Coed') !== false ? true : false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
			<span class="gender-text">Coed</span>
			</div>

			<br>

			{{ Form::label('email', 'Contact Email Address', array('class' => 'addLeagueText')) }}
			{{ Form::text('email', $league->email, array('class' => 'form-control', 'type' => 'email', 'required' => '', 'maxlength' => '100')) }}

			<br>
			<p style="font-weight: 700; font-size: 31px"> Optional Fields </p>
			<br>

			{{ Form::label('website', 'Website', array('class' => 'addLeagueText')) }}
			{{ Form::text('website', $league->website, array('class' => 'form-control', 'maxlength' => '250')) }}

			{{ Form::label('person', 'Contact Name', array('class' => 'addLeagueText')) }}
			{{ Form::text('person', $league->person, array('class' => 'form-control', 'maxlength' => '100')) }}

			{{ Form::label('phone', 'Contact Phone Number', array('class' => 'addLeagueText')) }}
			{{ Form::text('phone', $league->phone, array('class' => 'form-control', 'maxlength' => '20', 'pattern' => "^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$", 'data-parsley-error-message' => "Please enter in the format XXX-XXX-XXXX")) }}

			{{ Form::label('description', 'League Description', array('class' => 'addLeagueText')) }}
			{{ Form::textarea('description', $league->description, array('class' => 'form-control', 'style' => 'resize: none;', 'maxlength' => '250')) }}

			{{ Form::submit('Submit Change', array('class' => 'btn btn-primary center-block')) }}

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