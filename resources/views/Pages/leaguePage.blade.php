@extends('Layouts.main')

@section('content')

@section('title', ' | League Page')

<div class="league-page-background league-page-{{ strtolower(str_replace(' ', '-', $league->sport)) }}">

<h1 class="league-page-name">{{ $league->leaguename }}</h1>

	<table class="table table-bordered league-table-text" width="50%" align="center" style="position: relative; z-index: 1; table-layout: fixed;">
		<tbody>
			@if ($league->website != null)
				<tr>
					<td width = "20%">Website</td>
					<td><a href="{{ $league->website }}" target="_blank"> {{ $league->website }} </a></td>
				</tr>
			@endif
			<tr>
				<td>City</td>
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
				<td>
				<a data-toggle="collapse" href="#collapseEmail" aria-expanded="false" aria-controls="collapseEmail">Contact Us</a>

				<div class="collapse" id="collapseEmail">
					<div class="card card-block">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								{!! Form::open(['route' => ['leagues.reply', $league->id], 'method' => 'POST']) !!}
								{{ Form::label('email', 'Return Email', array('class' => 'addLeagueText')) }}
								{{ Form::text('email', null, array('class' => 'form-control')) }}

								{{ Form::label('message', 'Message', array('class' => 'addLeagueText')) }}
								{{ Form::textarea('message', null, array('class' => 'form-control')) }}

								<div class="captcha_container">
									{!! app('captcha')->display(); !!}
								</div>
								
								{{ Form::submit('Submit', array('class' => 'btn btn-primary center-block')) }}

								{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>

				</td>
			</tr>
			@if ($league->description != null)
				<tr>
					<td>Description</td>
					<td style="text-overflow: clip; white-space: normal;">{{ $league->description }}</td>
				</tr>
			@endif
		</tbody>
	</table>

	<p style="text-align: center; font-size: 16; margin-top: 20%; position: relative; z-index: 1;"> Is this your league and you want to change something? Click {!! Html::linkRoute('leagues.edit', 'here', array($league->id)) !!} to submit a request. </p>
</div>

@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
@endsection