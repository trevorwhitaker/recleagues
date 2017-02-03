<body>
<div style = "background: #333 !important; padding:10px 20px;">
	<h2 style = "color: #fff !important;">A request has been made to edit your league on Recreational Leagues!</h2>
</div>
<div style = "padding:20px;">
	<p style = "padding-top:20px;">
		New information has been submitted for your league. To confirm these changes click <a href="http://recreationalleagues.ca/leagues/confirmEdit/{{ $id }}/{{ $authToken }}">here</a>.
		If this was not you, please disregard this email and the changes will not be applied.
	</p>

	<div style = "border: 1px solid #333; padding:20px;">
		<strong>League Name:</strong>&nbsp;{{$leagueName}}<br/>
		<strong>Province:</strong>&nbsp;{{$province}}<br/>
		<strong>City:</strong>&nbsp;{{$city}}<br/>
		<strong>Sport:</strong>&nbsp;{{$sport}}<br/>
		<strong>Type:</strong>&nbsp;{{$type}}<br/>
		@if ($website != null) <strong>Website:</strong>&nbsp;{{$website}}<br/> @endif
		@if ($person != null)<strong>Contact Name:</strong>&nbsp;{{$person}}<br/> @endif
		@if ($phone != null)<strong>Phone:</strong>&nbsp;{{$phone}}<br/> @endif
		@if ($email != null)<strong>Email:</strong>&nbsp;{{$email}}<br/> @endif
		@if ($description != null)<strong>Description:</strong>&nbsp;{{$description}}<br/> @endif
	</div>
	<p style = "padding-top:20px;">
		This link is only valid for 24 hours.
	</p>
	<p style = "padding-top:20px;">
		This is an automatically generated notification. Do not Reply to this email.
	</p>
</div>
</body>