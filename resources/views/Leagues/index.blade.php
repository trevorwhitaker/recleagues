@extends('Layouts.main')

@section('content')

@section('title', ' | Find A League')

<div class="row" style="background-color: red">
<p class="default-text"> Find A League For You</p>
		{!! Form::open(array('route' => 'leagues.getLeagues', 'data-parsley-validate' => '')) !!}
		<table class="col-md-4 col-md-offset-4">
			<tr>
				<td class="findLeagueTD">
					{{ Form::label('province', 'Province', array('class' => 'findLeagueFilters', 'required' => '')) }}
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
					'Saskatchewan' => 'Saskatchewan'], null, ['placeholder' => '', 'class' => 'form-control findLeagueFilters', 'required' => '']) }}
				</td>
				<td class="findLeagueTD">
					{{ Form::label('sport', 'Sport', array('class' => 'findLeagueFilters')) }}
					{{ Form::select('sport', [
					'Baseball' => 'Baseball',
					'Fast-Pitch' => 'Fast-Pitch',
					'Football' => 'Football',
					'Hockey' => 'Hockey',
					'Slo-Pitch' => 'Slo-Pitch',
					'Soccer' => 'Soccer', 
					'VolleyBall' => 'VolleyBall'], null, ['placeholder' => '', 'class' => 'form-control findLeagueFilters', 'required' => '']) }}
				</td>
				<td class="findLeagueTD">
					{{ Form::label('type', 'Gender', array('class' => 'findLeagueFilters')) }}
					{{ Form::select('type', [
					'Male' => 'Male',
					'Female' => 'Female',
					'Co-op' => 'Co-op'], null, ['placeholder' => '', 'class' => 'form-control findLeagueFilters', 'required' => '']) }}
				</td>
				<td class="findLeagueTD">
				{{ Form::submit('Search', array('class' => 'btn btn-primary center-block', 'id' => 'findLeaguebutton')) }}
				</td>
			</tr>
		</table>

		{!! Form::close() !!}
</div>

@foreach($leagues as $league)
<p style="text-align: center">
	{!! Html::linkRoute('leagues.show', $league->LeagueName, array($league->Id), array('class' => 'findLeagueNames')) !!}
</p>
@endforeach

@endsection