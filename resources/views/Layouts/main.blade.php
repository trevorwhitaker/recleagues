<!DOCTYPE html>
<html>
<head>
	@include('Partials._head')
</head>

<body>
	<div id="app">
		<div id="main-title-background" style="overflow: hidden; display: flex;">
			<div class="" style="max-width: 18%; max-height: 18%; margin-top: 5px">
				<img src ="../../../../../../../../Images/MapleLeaf.png">
			</div>

			<div class="" style="max-width: 100%; max-height: 100%;; margin-top: 1px;">
				<img src ="../../../../../../../../Images/banner.jpg">
			</div>

			<div class="" style="max-width: 18%; max-height: 18%;  margin-top: 5px">
				<img " src ="../../../../../../../../Images/MapleLeaf.png">
			</div>
		</div>

		@include('Partials._nav')


		@include('partials._messages')


		@yield('content')
	</div>

	@yield('scripts')

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>