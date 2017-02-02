<body>
<div style = "background: #333 !important; padding:10px 20px;">
	<h2 style = "color: #fff !important;">A request has been made to edit your league on Recreational Leagues!</h2>
</div>
<div style = "padding:20px;">
	<p style = "padding-top:20px;">
		New information has been submitted for your league. To confirm these changes click <a href="http://recreationalleagues.ca/leagues/confirmEdit/{{ $id }}/{{ $authToken }}">here</a>.
		If this was not you, please disregard this email and the changes will not be applied.
	</p>

	<table width="30%" align="center" style="position: relative; z-index: 1; table-layout: fixed;">
		<tbody>
			<tr>
				<td>League Name</td>
				<td>{{ $leagueName }}</td>
			</tr>
			@if ($website != null)
				<tr>
					<td width = "20%">Website</td>
					<td>{{ $website }}</td>
				</tr>
			@endif
			<tr>
				<td>City</td>
				<td>{{ $city }}</td>
			</tr>
			<tr>
				<td>Province</td>
				<td>{{ $province }}</td>
			</tr>
			<tr>
				<td>Sport</td>
				<td>{{ $sport }}</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>{{ $type }}</td>
			</tr>
			@if ($person != null)
				<tr>
					<td>Contact Name</td>
					<td>{{ $person }}</td>
				</tr>
			@endif
			@if ($phone != null)
			<tr>
				<td>Phone</td>
				<td>{{ $phone }}</td>
			</tr>
			@endif
			<tr>
				<td>Email</td>
				<td>{{$email}}</td>
			</tr>
			@if ($description != null)
				<tr>
					<td>Description</td>
					<td style="text-overflow: clip; white-space: normal;">{{ $description }}</td>
				</tr>
			@endif
		</tbody>
	</table>
	<p style = "padding-top:20px;">
		This link is only valid for 24 hours.
	</p>
	<p style = "padding-top:20px;">
		This is an automatically generated notification. Do not Reply to this email.
	</p>
</div>
</body>