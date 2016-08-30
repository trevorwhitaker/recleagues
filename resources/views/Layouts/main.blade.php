<!DOCTYPE html>
<html>
<head>
	@include('Partials._head')
</head>

<body>
	<div id="app">
		<div id="main-title-background" style="overflow: hidden">
			<div class="col-md-4 text-center">
				<img src ="../../../Images/CanadaFlag.png" style="width: 50%; margin-top: 6% ">
			</div>

			<div class="col-md-4">
				<p id="main-title">RECREATIONAL</p>
				<p id="main-title">LEAGUES</p>
			</div>

			<div class="col-md-4 text-center">
				<img src ="../../../Images/CanadaFlag.png" style="width: 50%; margin-top: 6%;">
			</div>
		</div>

		@include('Partials._nav')


		@include('partials._messages')


		@yield('content')
	</div>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	@yield('scripts')
</body>
</html>