 <html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
</head>
<body>
	<!--<div class="row">

		 <p><input type="text">
		    <button type="button" class="btn btn-info">
		      <span class="glyphicon glyphicon-search"></span> Search
		    </button>
		  </p>
  </div> -->
  	

  	<div class="container-fluid">
  		

  		<div class="row">
  			<div class="col-lg-6 col-md-6 col-sm-2">
  				<img src="bus.png" class="img-responsive imgwidth" alt="TitleImage">
  			</div>	
  		</div>

		  <div class="row">
		  <div class="col-lg-6 col-md-6 col-sm-5">
		    <div class="input-group">
		      <input type="text" class="form-control" placeholder="Enter the bus number">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="button" id="buttonclick">Lets Go!</button>
		      </span>
		    </div><!-- /input-group -->
		  </div><!-- /.col-lg-6 -->
		</div><!--row-->
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-5">

				<audio  controls autoplay hidden>
				  <source  src="http://api.voicerss.org/?key=f18cff93c0ec4b62a80ee09573355fd8&src=Your%20bus%20is%203%20minutes%20away&hl=en-in&r=1" type="audio/ogg" class="audiochange">
				  <source src="horse.mp3" type="audio/mpeg">
				  Your browser does not support the audio element.
				</audio>

			</div>



		</div>
		<div class="row martop">
			<div class="col-lg-6 col-md-6 col-sm-5">
								

				<p  class="northdest"></p>
				<img src="arrow.png" class="img-responsive imgarrow">
				<p  class="source"></p>
				<img src="arrowinverse.png" class="img-responsive imgarrow">
				<p  class="southdest"></p>
			</div>

		</div>


		</div><!--Contained-->
  </body>
  <script type="text/javascript">
  
  	

  	/*Text to Speech*/
  	var distance,Vacancy,maketext;
  	time="5kms";Vacancy="20";
  	maketext="Your%20bus%20is%20"+time+"%20away"+"%20and%20has%20"+Vacancy+"%20seats";
  	var link="http://api.voicerss.org/?key=f18cff93c0ec4b62a80ee09573355fd8&src="+maketext+"&hl=en-in&r=1";
  	link=link.split("%20").join(" ");
  	$(".audiochange").attr("src",link);
  	/*Get Request*/
  $("#buttonclick").click(function(){


  
  	$.get( "http://ah9.azurewebsites.net/api/Find?q=asdsadsad&lng=78.470298&lat=17.390177", function( data ) {

		  $( ".northdest" )
		    .append( "North Destination: " + data.NorthDestination ); // John
		   $( ".source" ) .append( "source: " + data.Source ); //  2pm
		    $( ".southdest" ) .append( "South Destination: " + data.SouthDestination );
		}, "json" ); 
  });

 	/*ajax Requests
 	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("mydata").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "http://ah9.azurewebsites.net/api/Find?q=asdsadsad&lng=78.470298&lat=17.390177", true);
  xhttp.send();*/

  


  </script>
</html>