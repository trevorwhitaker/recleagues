@extends('Layouts.main')

@section('content')

@section('title', ' | League Page')

<div style="background-image: url(../../../Images/Backgrounds/{{ $league->sport }}.PNG); height: 100vh">
	<h2 class="leaguePageText">{{ $league->leaguename }}</h2>

	<p class="leaguePageText"> {{ $league->city }} </p>

	<p class="leaguePageText"> {{ $league->province }} </p>

	<p class="leaguePageText"> {{ $league->sport }} </p>

	<p class="leaguePageText"> {{ $league->gender }} </p>

	<p class="leaguePageText"> {{ $league->website }} </p>

	<p class="leaguePageText"> {{ $league->person }} </p>

	<p class="leaguePageText"> {{ $league->phone }} </p>

	<p class="leaguePageText"> {{ $league->email }} </p>

	<p class="leaguePageText"> {{ $league->description }} </p>
</div>

@endsection