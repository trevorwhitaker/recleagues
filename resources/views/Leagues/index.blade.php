@extends('Layouts.main')

@section('content')

@section('title', ' | Find A League')

<div class="row">
	<div>
		<p class="default-text"> Find A League</p>
			{!! Form::open(array('route' => 'leagues.getLeagues', 'data-parsley-validate' => '')) !!}
			<table class="col-md-6 col-md-offset-3">
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
						'Saskatchewan' => 'Saskatchewan'], $data['province'], ['placeholder' => '', 'id' => 'provinceDropDown', 'class' => 'form-control findLeagueFilters', 'required' => '']) }}
					</td>
					<td class="findLeagueTD">
						@include('Partials._sportsList', array('className' => 'findLeagueFilters', 'showGeneral' => false, 'sport' => $data['sport']))
					</td>
					<td class="findLeagueTD">
						{{ Form::label('type', 'Gender', array('class' => 'findLeagueFilters')) }}
						{{ Form::select('type', [
						'Male' => 'Male',
						'Female' => 'Female',
						'Coed' => 'Coed',
						'Youth - Boys' => 'Youth - Boys',
						'Youth - Girls' => 'Youth - Girls'], $data['type'], ['placeholder' => '', 'class' => 'form-control findLeagueFilters', 'required' => '']) }}
					</td>
					<td class="findLeagueTD">
					{{ Form::submit('Search', array('class' => 'btn btn-primary center-block', 'id' => 'findLeaguebutton')) }}
					</td>
				</tr>
			</table>

			{!! Form::close() !!}
	</div>
</div>

<br>
@if($data['fromMain'])
	<p class="default-text">
		Fill in the fields above to find a league for you
	</p>
@elseif($data['leagues']->isEmpty())
	<p class="default-text">
		No leagues were found with these parameters.
	</p>
@else
<table class="table table-striped" width="100%">
  <thead class="thead-inverse">
    <tr>
      <th class="find-league-text" width="33.33%">City</th>
      <th class="find-league-text" width="33.33%">League Name</th>
      <th class="find-league-text" width="33.33%">Gender</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($data['leagues'] as $league)
  	<tr>
      <td class="find-league-text">{{ $league->city }}</td>
      <td class="find-league-text">{!! Html::linkRoute('leagues.show', $league->LeagueName, array(rawurlencode($league->LeagueName) . '-' . $league->Id), array('class' => 'findLeagueNames')) !!} </td>
      <td class="find-league-text">{{ $league->type }}</td>
    </tr>
	@endforeach
  </tbody>
</table>
@endif

@endsection
