	@extends('Layouts.main')

	@section('content')

	@section('title', ' | Find A League')
	<div style="text-align:center">
		<br>

		<a href="/messages/create" class="btn btn-info" role="button">Submit A Message</a>

		<br>
		<hr>
		<br>
	</div>
	<div>
	{!! Form::open(array('route' => 'comments.getMessages', 'data-parsley-validate' => '')) !!}
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
						'Saskatchewan' => 'Saskatchewan'], $data['province'], ['placeholder' => '', 'class' => 'form-control findLeagueFilters', 'required' => '']) }}
					</td>
					<td class="findLeagueTD">
						{{ Form::label('sport', 'Sport', array('class' => 'findLeagueFilters')) }}
						{{ Form::select('sport', [
						'Baseball' => 'Baseball',
						'Fast-Pitch' => 'Fast-Pitch',
						'Football' => 'Football',
						'Hockey' => 'Hockey',
						'Ball Hockey' => 'Ball Hockey',
						'Ultimate Frisbee' => 'Ultimate Frisbee',
						'Slo-Pitch' => 'Slo-Pitch',
						'Soccer' => 'Soccer', 
						'VolleyBall' => 'VolleyBall',
						'Baseketball' => 'Basketball',
						'General' => 'General'], $data['sport'], ['placeholder' => '', 'class' => 'form-control findLeagueFilters', 'required' => '']) }}
					</td>
					<td class="findLeagueTD">
					{{ Form::submit('Search', array('class' => 'btn btn-primary center-block', 'id' => 'findLeaguebutton')) }}
					</td>
				</tr>
			</table>

			{!! Form::close() !!}

	<br>
	<hr>
	<br>

	</div>
	<div style="text-align: center;">
	@foreach($data['comments'] as $comment)
		<hr style="border: 1px solid black !important">
		<a name="{{ $comment->id }}"></a>
		<h4> {{ $comment->subject }}</h4>
		<p> City: {{ $comment->city }} </p>
		<p> Posted on: {{ $comment->updated_at }} </p>
		<p> Posted by: {{ $comment->name }} </p>
		<br>
		<p> {{$comment->message }} </p>

		<p>
			<a class="btn btn-primary" data-toggle="collapse" href="#collapseComment{{$comment->id}}" aria-expanded="false" aria-controls="collapseComment{{$comment->id}}">
				Reply
			</a>

			<a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-primary">Edit</a>
		</p>
		<div class="collapse" id="collapseComment{{$comment->id}}">
		<div class="card card-block">
			<div class="row">
				<div class="col-md-2 col-md-offset-5">
					{!! Form::open(array('route' => 'comments.reply')) !!}
						{{ Form::label('email', 'Return Email', array('class' => 'addLeagueText')) }}
						{{ Form::text('email', null, array('class' => 'form-control')) }}

						{{ Form::label('message', 'Message', array('class' => 'addLeagueText')) }}
						{{ Form::textarea('message', null, array('class' => 'form-control')) }}

						{{ Form::hidden('id', $comment->id) }}
						
						{{ Form::submit('Submit', array('class' => 'btn btn-primary center-block')) }}

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	@endforeach
	<br>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	@endsection