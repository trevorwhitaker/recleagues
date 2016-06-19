@extends('Layouts.main')

@section('content')

@section('title', ' | Add A League')

<form>
	<fieldset class="form-group">
		<label for="LeagueName">League Name</label>
		<input class="form-control" id="LeagueName" placeholder="Enter league name">
	</fieldset>
	<fieldset class="form-group">
		<label for="City">City</label>
		<input class="form-control" id="City" placeholder="Enter city">
	</fieldset>
	<fieldset class="form-group">
		<label for="Province">Province</label>
		<select class="form-control" id="Province">
			<option disabled selected value style="display:none"> Select Your Province </option>
			<option>Alberta</option>
			<option>British Columbia</option>
			<option>Manitoba</option>
			<option>New Brunswick</option>
			<option>Newfoundland</option>
			<option>Nova Scotia</option>
			<option>Ontario</option>
			<option>Prince Edward Island</option>
			<option>Quebec</option>
			<option>Saskatchewan</option>
		</select>
	</fieldset>
	<fieldset class="form-group">
		<label for="Sport">Sport</label>
		<select class="form-control" id="Sport">
			<option disabled selected value style="display:none"> Select Your Sport </option>
			<option>Baseball</option>
			<option>Fast-Pitch</option>
			<option>Football</option>
			<option>Hockey</option>
			<option>Slo-Pitch</option>
			<option>Soccer</option>
			<option>Volleyball</option>
		</select>
	</fieldset>
	<fieldset class="form-group">
		<label for="Gender">Gender</label>
		<select class="form-control" id="Gender">
			<option disabled selected value style="display:none"> Gender </option>
			<option>Men's</option>
			<option>Women's</option>
			<option>Co-op</option>
		</select>
	</fieldset>
	<fieldset class="form-group">
		<label for="Website">League Website (if available)</label>
		<input type ="url" class="form-control" id="Website" placeholder="Enter website">
	</fieldset>
	<fieldset class="form-group">
		<label for="ContactPerson">Contact Person</label>
		<input class="form-control" id="ContactPerson" placeholder="Enter contact's name">
	</fieldset>
	<fieldset class="form-group">
		<label for="ContactNumber">Contact Phone Number</label>
		<input class="form-control" id="ContactNumber" placeholder="Enter contact's phone number">
	</fieldset>
	<fieldset class="form-group">
		<label for="ContactEmail">Contact E-mail</label>
		<input type="email" class="form-control" id="ContactEmail" placeholder="Enter contact's email address">
	</fieldset>
	<fieldset class="form-group">
		<label for="Description">Description for your league (Optional)</label>
		<textarea class="form-control" id="Description" rows="3"></textarea>
	</fieldset>
	<button type="submit" class="btn btn-primary center-block">Submit</button>
</form>
@endsection