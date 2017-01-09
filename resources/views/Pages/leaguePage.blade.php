@extends('Layouts.main')

@section('content')

@section('title', ' | League Page')

<div class="league-page-background league-page-{{ strtolower(str_replace(' ', '-', $league->sport)) }}">

<h1 class="league-page-name">{{ $league->leaguename }}</h1>

	<table class="table table-bordered league-table-text" width="50%" align="center" style="position: relative; z-index: 1;">
		<tbody>
			@if ($league->website != null)
				<tr>
					<td>Website</td>
					<td><a href="{{ $league->website }}" target="_blank"> {{ $league->website }} </a></td>
				</tr>
			@endif
			<tr>
				<td width = "20%">City</td>
				<td>{{ $league->city }}</td>
			</tr>
			<tr>
				<td>Province</td>
				<td>{{ $league->province }}</td>
			</tr>
			<tr>
				<td>Sport</td>
				<td>{{ $league->sport }}</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>{{ $league->type }}</td>
			</tr>
			@if ($league->person != null)
				<tr>
					<td>Contact Name</td>
					<td>{{ $league->person }}</td>
				</tr>
			@endif
			@if ($league->phone != null)
			<tr>
				<td>Phone</td>
				<td>{{ $league->phone }}</td>
			</tr>
			@endif
			<tr>
				<td>Email</td>
				<td><a href="mailto:{{ $league->email }}?subject=Saw Your League at RecreationalLeagues.ca">{{ $league->email }}</a></td>
			</tr>
			@if ($league->description != null)
				<tr>
					<td>Description</td>
					<td>{{ $league->description }}</td>
				</tr>
			@endif
		</tbody>
	</table>

	<p style="text-align: center; font-size: 16"> Is this your league and you want to change something? Click {!! Html::linkRoute('leagues.edit', 'here', array($league->id)) !!} to submit a request. </p>
</div>

@endsection