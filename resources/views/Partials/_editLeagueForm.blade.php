{{ Form::label('leaguename', 'League Name', array('class' => 'addLeagueText')) }}
{{ Form::text('leaguename', $league->leaguename, array('class' => 'form-control', 'required' => '', 'maxlength' => '250')) }}

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

@include('Partials._sportsList', array('className' => 'addLeagueText', 'showGeneral' => false, 'sport' => $league->sport))

<div style="text-align: left;">
{{ Form::checkbox('type[0]', 'Male', strpos($league->type, 'Male') !== false ? true : false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
<span class="gender-text">Male</span>
<br>
{{ Form::checkbox('type[1]', 'Female', strpos($league->type, 'Female') !== false ? true : false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
<span class="gender-text">Female</span>
<br>
{{ Form::checkbox('type[2]', 'Coed', strpos($league->type, 'Coed') !== false ? true : false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
<span class="gender-text">Coed</span>
</div>
<div>
{{ Form::checkbox('type[3]', 'Youth - Boys', strpos($league->type, 'Youth - Boys') !== false ? true : false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
<span class="gender-text">Youth - Boys</span>
</div>
<div>
{{ Form::checkbox('type[4]', 'Youth - Girls', strpos($league->type, 'Youth - Girls') !== false ? true : false, ['class' => 'gender-check']) }}&nbsp;&nbsp;&nbsp;
<span class="gender-text">Youth - Girls</span>
</div>
<br>

{{ Form::label('email', 'Contact Email Address', array('class' => 'addLeagueText')) }}
{{ Form::text('email', $league->email, array('class' => 'form-control', 'type' => 'email', 'required' => '', 'maxlength' => '100')) }}

<br>
<p style="font-weight: 700; font-size: 31px"> Optional Fields </p>
<br>

{{ Form::label('website', 'Website', array('class' => 'addLeagueText')) }}
{{ Form::text('website', $league->website, array('class' => 'form-control', 'maxlength' => '250')) }}

{{ Form::label('person', 'Contact Name', array('class' => 'addLeagueText')) }}
{{ Form::text('person', $league->person, array('class' => 'form-control', 'maxlength' => '100')) }}

{{ Form::label('phone', 'Contact Phone Number', array('class' => 'addLeagueText')) }}
{{ Form::text('phone', $league->phone, array('class' => 'form-control', 'maxlength' => '20')) }}

<div id="descCount">
    <label class="addLeagueText">League Description</label>
    <label class="addLeagueText"> @{{count}} characters remaining </label>
    {{ Form::textarea('description', $league->description, array('class' => 'form-control', 'style' => 'resize: none;', 'maxlength' => '300', 'v-model' => 'text')) }}
</div>

@section('styles')

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
	      query: "{{$league->city}}, {{$league->province}}",
	      cities: [],
	      city: "{{$league->city}}",
	      province: "{{$league->province}}"
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
	        axios.get('{{ env('APP_URL') }}/api/getcities/' + app.query)
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

      var descCount = new Vue(
      {
        el: '#descCount',
        data: {
          text: "{{$league->description}}",
          count: 300 - {{ strlen($league->description)}}
        },
        watch: {
          text: function() {
            if (this.count >= 0) {
                if (this.text.length > 300) {
                    this.count = 0
                }
                else {
                    this.count = 300 - this.text.length
                }
            }
          }
        }
      });
    </script>

@endsection