@extends('Layouts.main')

@section('title', ' | Add A League')

@section('content')


<div class="row">
	<div class="col-md-4 col-md-offset-4">
		{!! Form::open(array('route' => ['faq.update', $faq->id])) !!}
			{{ Form::label('header', 'Header', array('class' => 'addLeagueText')) }}
			{{ Form::text('header', $faq->header, array('class' => 'form-control', 'required' => '', 'maxlength' => '250')) }}

			{{ Form::label('body', 'Body', array('class' => 'addLeagueText')) }}
			{{ Form::textarea('body', $faq->body, array('class' => 'form-control', 'required' => '')) }}

			{{ Form::submit('Submit', array('class' => 'btn btn-primary center-block')) }}

		{!! Form::close() !!}
	</div>
</div>

@endsection