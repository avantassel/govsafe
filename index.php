
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GovSAFE - Survivor Assistance Form Editor</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	
	<link href="jumbotron-narrow.css" rel="stylesheet">

	<link href="app.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsbzoLjGocnaRHZF3IBMFVI-X41vPl6qM&sensor=true"></script>
  </head>
  <body>    
<div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Track</a></li>
        </ul>
        <h3 class="text-muted">Survivor Assistance Form Editor</h3>
      </div>

      <div class="jumbotron">
        <h1><img src="/images/safe-logo-simple.png" width="100"/><br/>SAFE</h1>
        <p class="lead">
			SAFE is the Survivor Assistance Form Editor
		</p>
		<h2>One form to start state assistance.</h2><br/>
		<p>
			<a class="typeform-share btn btn-lg btn-success hide" id="start-form" href="https://avantassel.typeform.com/to/ToheBD" data-mode="1" target="_blank">Get Started</a>
			<div id="maparea">
				<i class='icon-spinner icon-spin icon-large'></i>
			</div>
		</p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Food Assistance</h4>
          <p></p>

          <h4>Material Assistance</h4>
          <p>(Clothing, Toiletries)</p>

          <h4>Housing</h4>
          <p>(Homeowner/Renter, Damaged/Destroyed, Inaccessible?) </p>
          
        </div>

        <div class="col-lg-6">
          <h4>Health/Medical</h4>
          <p></p>

          <h4>Clean-up/Re-building</h4>
          <p></p>

          <h4>Financial</h4>
          <p></p>

          <h4>Pets</h4>
          <p>(Food, shelter, other?) </p>
        </div>
        
      </div>

      <div class="footer">
        <p>&copy; Company <?=date('Y')?></p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.geolocation.js"></script>
    <script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'share-button.css';s=gt.call(d,'head')[0];s.appendChild(qs,s)}})()</script>
    <script type="text/javascript">

    $(document).ready(function () {
 
    $.geolocation(function (lat, lng) {
        var myLatlng = new google.maps.LatLng(lat, lng);
        var mapOptions = {
            center: new google.maps.LatLng(lat, lng),
            zoom: 13
        };
        var map = new google.maps.Map(document.getElementById("maparea"), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: "Your Location"
        });
        $href = $('#start-form').attr('href');
        $('#start-form').attr('href',$href+'?ll='+lat+','+lng);
        $('#start-form').removeClass('hide');
    });
});

    </script>
  </body>
</html>