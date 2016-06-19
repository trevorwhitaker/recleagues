@extends('Layouts.main')

@section('content')

@section('title', ' | Contact Us')

<p class="default-text">Have a question or a request?</p>
<form>
	<fieldset class="form-group">
		<label for="ReturnEmail">Return E-mail</label>
		<input type="email" class="form-control" id="ReturnEmail" placeholder="Enter league name">
	</fieldset>
	<fieldset class="form-group">
		<label for="Description">Question/Request</label>
		<textarea class="form-control" id="Description" rows="3">Type your message here...</textarea>
	</fieldset>
	<button type="submit" class="btn btn-primary center-block">Submit</button>
</form>

@endsection