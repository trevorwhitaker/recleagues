<body>
<div style = "background: #333 !important; padding:10px 20px;">
	<h2 style = "color: #fff !important;">You have received an add league request from recreational leagues!</h2>
</div>
<div style = "padding:20px;">
	<div style = "border: 1px solid #333; padding:20px;">
		<strong>League Name:</strong>&nbsp;{{$leagueName}}<br/>
		<strong>Province:</strong>&nbsp;{{$province}}<br/>
		<strong>City:</strong>&nbsp;{{$city}}<br/>
		<strong>Sport:</strong>&nbsp;{{$sport}}<br/>
		<strong>Type:</strong>&nbsp;{{$type}}<br/>
		<strong>Website:</strong>&nbsp;{{$website}}<br/>
		<strong>Contact Name:</strong>&nbsp;{{$person}}<br/>
		<strong>Phone:</strong>&nbsp;{{$phone}}<br/>
		<strong>Email:</strong>&nbsp;{{$email}}<br/>
		<strong>Description:</strong>&nbsp;{{$description}}<br/>
	</div>

	<div>
	<a href="recreationalleagues.ca/leagues/confirm/{{$id}}/{{$authtoken}}">Click here to accept</a>
	<hr>
	<a href="recreationalleagues.ca/leagues/deny/{{$id}}/{{$authtoken}}">Click here to deny</a>
	</div>
	<p style = "padding-top:20px;">
		This is an automatically generated notification. Do not Reply to this email.
	</p>
</div>
</body>