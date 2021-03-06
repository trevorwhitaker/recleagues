<nav class="navbar navbar-default">
	<div>
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
				<li class="{{ (Route::is('leagues.*') AND !Request::is('leagues/create')) ? "active" : "" }}"><a href="/leagues/">Find A League</a></li>
				<li class="{{ Request::is('leagues/create') ? "active" : "" }}"><a href="/leagues/create">Add A League</a></li>
				<li class="{{ Route::is('comments.*') ? "active" : "" }}"><a href="/bulletinboard">Bulletin Board</a></li>
				<li class="{{ Request::is('FAQ') ? "active" : "" }}"><a href="/FAQ">FAQ</a></li>
				<li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact Us</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>