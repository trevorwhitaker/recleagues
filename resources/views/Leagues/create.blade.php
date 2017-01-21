@extends('Layouts.main')

@section('title', ' | Add A League')

@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

<p class="default-text"> If your league is already in our directory and you want to change the details, please check out our <a href="/FAQ/#edit-a-league">FAQ</a> seciton.</p>

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		{!! Form::open(array('route' => 'leagues.store', 'data-parsley-validate' => '')) !!}
			{{ Form::label('leagueName', 'League Name', array('class' => 'addLeagueText')) }}
			{{ Form::text('leagueName', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '250')) }}

			{{ Form::label('city', 'City and Province', array('class' => 'addLeagueText')) }}
			{{ Form::label('city', 'Start typing to find your city!', array('class' => 'addLeagueText')) }}

			<div class="search" id="searchCity">
					 <input type="hidden" name="city" :value="city"/>
					 <input type="hidden" name="province" :value="province"/>
					 <input class="form-control" v-model="query" type="text" name="q" autocomplete="off" />
					 <ul v-if="cities.length > 0" class="results" >
						 <li v-for="city in cities">
							 <p> <a v-on:click="setCity(city.city, city.province)">@{{ city.city }}, @{{ city.province}} </a> </p>
						 </li>
					 </ul>
			</div>

			{{ Form::label('sport', 'Sport', array('class' => 'addLeagueText')) }}
			{{ Form::select('sport', [
			'Baseball' => 'Baseball',
			'Fast-Pitch' => 'Fast-Pitch',
			'Flag Football' => 'Flag Football',
			'Hockey' => 'Hockey',
			'Ball Hockey' => 'Ball Hockey',
			'Ultimate Frisbee' => 'Ultimate Frisbee',
			'Slo-Pitch' => 'Slo-Pitch',
			'Soccer' => 'Soccer', 
			'Volleyball' => 'Volleyball',
			'Basketball' => 'Basketball'], null, ['placeholder' => '', 'class' => 'form-control', 'required' => '']) }}

			<div style="text-align: left;">
			{{ Form::checkbox('type[0]', 'Male', false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
			<span class="gender-text">Male</span>
			<br>
			{{ Form::checkbox('type[1]', 'Female', false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
			<span class="gender-text">Female</span>
			<br>
			{{ Form::checkbox('type[2]', 'Coed', false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
			<span class="gender-text">Coed</span>
			</div>
			<div>
			{{ Form::checkbox('type[3]', 'Youth - Boys', false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
			<span class="gender-text">Youth - Boys</span>
			</div>
			<div>
			{{ Form::checkbox('type[4]', 'Youth - Girls', false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
			<span class="gender-text">Youth - Girls</span>
			</div>

			<br>

			{{ Form::label('email', 'Contact Email Address', array('class' => 'addLeagueText')) }}
			{{ Form::text('email', null, array('class' => 'form-control', 'type' => 'email', 'required' => '', 'maxlength' => '100')) }}

			<br>
			<p style="font-weight: 700; font-size: 31px; text-align: center;"> Optional Fields </p>
			<br>

			{{ Form::label('website', 'Website', array('class' => 'addLeagueText')) }}
			{{ Form::text('website', null, array('class' => 'form-control', 'maxlength' => '250')) }}

			{{ Form::label('person', 'Contact Name', array('class' => 'addLeagueText')) }}
			{{ Form::text('person', null, array('class' => 'form-control', 'maxlength' => '100')) }}

			{{ Form::label('phone', 'Contact Phone Number', array('class' => 'addLeagueText')) }}
			{{ Form::text('phone', null, array('class' => 'form-control', 'maxlength' => '20', 'pattern' => "^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$", 'data-parsley-error-message' => "Please enter in the format XXX-XXX-XXXX")) }}

			{{ Form::label('description', 'League Description', array('class' => 'addLeagueText')) }}
			{{ Form::textarea('description', null, array('class' => 'form-control', 'style' => 'resize: none;', 'maxlength' => '250')) }}

			<div class = "captcha_container">
				{!! app('captcha')->display(); !!}
			</div>

			{{ Form::submit('Submit', array('class' => 'btn btn-primary center-block')) }}

		{!! Form::close() !!}
	</div>
</div>

<style>
.search {
    position: relative;
    margin: 0 auto;
}

.search input:focus + .results { display: block }

.search .results:hover{ display: block }

.search .results {
    display: none;
    position: absolute;
    top: 35px;
    left: 0;
    right: 0;
    z-index: 10;
    padding: 0;
    margin: 0;
    border-width: 1px;
    border-style: solid;
    border-color: #cbcfe2 #c8cee7 #c4c7d7;
    border-radius: 3px;
    background-color: #fdfdfd;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fdfdfd), color-stop(100%, #eceef4));
    background-image: -webkit-linear-gradient(top, #fdfdfd, #eceef4);
    background-image: -moz-linear-gradient(top, #fdfdfd, #eceef4);
    background-image: -ms-linear-gradient(top, #fdfdfd, #eceef4);
    background-image: -o-linear-gradient(top, #fdfdfd, #eceef4);
    background-image: linear-gradient(top, #fdfdfd, #eceef4);
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

.search .results li { display: block }

.search .results a {
    display: block;
    position: relative;
    margin: 0 -1px;
    padding: 6px 40px 6px 10px;
    color: #808394;
    font-weight: 500;
    text-shadow: 0 1px #fff;
    border: 1px solid transparent;
    border-radius: 3px;
}

.search .results a span { font-weight: 200 }

.search .results a:hover {
    text-decoration: none;
    color: #fff;
    text-shadow: 0 -1px rgba(0, 0, 0, 0.3);
    border-color: #2380dd #2179d5 #1a60aa;
    background-color: #338cdf;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #59aaf4), color-stop(100%, #338cdf));
    background-image: -webkit-linear-gradient(top, #59aaf4, #338cdf);
    background-image: -moz-linear-gradient(top, #59aaf4, #338cdf);
    background-image: -ms-linear-gradient(top, #59aaf4, #338cdf);
    background-image: -o-linear-gradient(top, #59aaf4, #338cdf);
    background-image: linear-gradient(top, #59aaf4, #338cdf);
    -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    -moz-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    -ms-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    -o-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
}

</style>

@endsection

@section('scripts')
	{!! Html::script('js/parsley.min.js') !!}
	<script src="https://unpkg.com/vue@2.1.8/dist/vue.js"></script>
  	<script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
  	<script src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>

	<script>
      function countChar(val) {
        var len = val.value.length;
        if (len >= 250) {
          val.value = val.value.substring(0, 250);
        } else {
          $('#charNum').text(250 - len);
        }
      };
    </script>

    <script>
    var searchCity = new Vue(
	  {
	    el: '#searchCity',
	    data: {
	      query: "",
	      cities: [],
	      city: "",
	      province: ""
	    },
	    watch: {
	      query: function() {
	        this.cities = [];
	        if (this.query.length >= 3)
	        {
	          this.lookupCity();
	        }
	      }
	    },
	    methods: {
	      lookupCity: _.debounce(function() {
	        var app = this;
	        axios.get('http://recreationalleagues.ca/api/getcities/' + app.query)
	          .then(function(response) {
	            app.cities = response.data
	          })
	      }, 500),
	      setCity: function(city, province) {
	      	this.query = city + ", " + province
	      	this.city = city
	      	this.province = province
	      }
	    }
	  });
    </script>

@endsection