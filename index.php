<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <title>Weather Application</title>
  </head>
  <body>
  	<div class="container">
	    <div class="jumbotron">
		  <h1 class="display-4">Welcome to Jacob's Weather App</h1>
		  <p class="lead">This is a Restful Application to get weather info from back-end server by Ajax and Json.</p>
		  <hr class="my-4">
		  <div class="form-group">
		    <label for="city">City to search</label>
		    <input type="text" class="form-control" id="city" placeholder="Enter City">
		  </div>
		  <p class="lead">
		    <button class="btn btn-primary btn-lg" role="button" id="get_weather">Get Weather Info</button>
		  </p>
		  <h1 class="lead" id="weather_info"></h1>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    	$("#get_weather").click(function(){
    		// Get the value of the input city
    		var location = $("#city").val();
    		// Use jquery ajax to get the weather info
    		$.get(
    			"http://192.168.33.10/Rest/weather.php?q="+location+"&appid=4feb67b0dd401c57666337291f0c2532", function( data ) {
    					var temp = data.main.temp;
    					var c_temp = Math.round(temp - 273);
    					var pres = data.main.pressure;
    					var humi = data.main.humidity;
					    $("#weather_info").html(location + "'s weather - " + "Temp: " + c_temp + " C ;Pressure: " + pres + " ;Humidity: " + humi + "%;");
					}
			);
    	});


    	$( function() {
    		$.get(
    			"http://192.168.33.10/Rest/fill.php", function( data ) {
    					var availableTags = $.parseJSON(data);
    					$( "#city" ).autocomplete({
					      source: availableTags
					    });
					}
			);
			
		    // $( "#city" ).autocomplete({
		    //   source: availableTags
		    // });
		  } );
    </script>
  </body>
</html>