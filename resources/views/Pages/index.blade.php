@extends('Layouts.main')

@section('content')

@section('title', ' | Your recreational sports league directory')


<meta name="description" content="adult recreational sports league directory canada baseball basketball hockey soccer slo pitch slo-pitch men women coed" />

<p class="default-text" style="color: red; margin-bottom: 20px; font-size: 20px;">Leagues Currently Registered:&nbsp {{$count}} </p>
<div class="main-page">

	<p class="default-text"> Looking for a league to play in? Recreational Leagues is your source.</p>

	<p class="default-text"> We provide contact information and links to league websites. </p>

	<p class="default-text"> So get on the list, keep everyone informed and promote your league. </p>

	<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	    	<div class='inner-item'>
	      		<img src="/Images/slideshow/Calgary Hockey.jpg" class="img-responsive">
	      	</div>
	    </div>

	    <div class="item">
	    	<div class='inner-item'>
	      		<img src="/Images/slideshow/Edmonton.png" class="img-responsive">
	      	</div>
	    </div>

	    <div class="item">
	    	<div class='inner-item'>
	      		<img src="/Images/slideshow/Halifa Metro Senior Soccer.jpg" class="img-responsive">
	      	</div>
	    </div>

	    <div class="item">
	    <div class='inner-item'>
	      <img src="/Images/slideshow/Toronto Softball League.gif" class="img-responsive">
	      </div>
	    </div>

	    <div class="item">
	    <div class='inner-item'>
	      <img src="/Images/slideshow/Vancouver Volleyball.jpg" class="img-responsive">
	      </div>
	    </div>
	  </div>
	</div>

</div>

<div class="twitter_feed">

	<a class="twitter-follow-button" href="https://twitter.com/rec__leagues"> Follow @rec__leagues</a>

	<a class="twitter-timeline" data-height="600" href="https://twitter.com/rec__leagues">Tweets by rec__leagues</a>
	<script async src="//platform.twitter.com/widgets.js" data-tweet-limit=5 charset="utf-8"></script>

</div>

@endsection

@section('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	{!! Html::script('js/slideshow.js') !!}
@endsection