@extends('Layouts.main')

@section('title', ' | FAQ')

@section('content')
<div style="margin-right: 15px; margin-left: 15px; text-align: center;">
	@foreach ($faqs as $faq)
		<p class="default-text"><a href="/FAQ#{{str_replace(' ', '-', str_replace('?', '', $faq->header))}}">{{$faq->header}}</a></p>
	@endforeach

	@foreach ($faqs as $faq)
		<hr>
		<a name="{{str_replace(' ', '-', str_replace('?', '', $faq->header))}}"></a>
		<p class="default-text" style="font-weight: bold; font-size: 40px">{{$faq->header}}</p>
		@foreach ($faq->bodies as $body)
			<p class="default-text">{{$body}}</p>
		@endforeach

		<a href="{{ route('faq.edit', $faq->id) }}" class="btn btn-primary">Edit</a>

		{!! Form::open(['route' => ['faq.destroy', $faq->id], 'method' => 'DELETE']) !!}
		{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
		{!! Form::close() !!}
	@endforeach
</div>
@endsection