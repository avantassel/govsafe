<?php
require('Services/Twilio.php'); 
 
$account_sid = 'AC4686f9b878ee5ccc013e97f4538538cc'; 
$auth_token = '5384c08fab0b9f81e97d36203084f57c'; 
$client = new Services_Twilio($account_sid, $auth_token); 
 
$client->account->messages->create(array( 
  'To' => "7203363337", 
  'From' => "+17205482605", 
  'Body' => "Your GovSAFE confirmation #: 302313",   
));
?>
<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SAFE | Survivor Assistance Form Editor</title>

    
    <meta name="description" content="Survivor Assistance Form Editor" />
    
    <meta name="author" content="GovSafe, lls" />
    <meta name="copyright" content="GovSafe, llc. Copyright (c) <?=date('Y')?>" />

    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/app.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsbzoLjGocnaRHZF3IBMFVI-X41vPl6qM&sensor=true"></script>
  </head>
  <body>
    

 <div class="row">
    <div class="large-12 columns">
 
      <!-- Navigation -->
 
        <ul class="button-group">
          <li><a href="index.php" class="button">Home</a></li>
          <li><a href="admin.php" class="button">Admin</a></li>
        </ul>
 
      <!-- End Navigation -->
 
      <!-- Header Content -->
 
        <div class="row panel header">
          <div class="large-2 columns">
            <img src="images/safe-logo.png">
          </div>
          <div class="large-10 columns">
            <p>Survivor Assistance Form Editor</p>
            <h2>One form to start disaster assistance.</h2>
          </div>
          
        </div>
 
      <!-- End Header Content -->
 
 
      <!-- Steps -->
 
        <div class="row steps">
 
          <div class="large-3 small-12 columns">
            <ul class="pricing-table">
              <li class="title step1"><span class="step">1</span> Locate</li>
              <li class="description">Get your current location</li>
              <li class="cta-button"><a class="button" id="locate" href="#">Locate You</a></li>
            </ul>
          </div>
 
          <div class="large-3 small-12 columns">
            <ul class="pricing-table">
              <li class="title step2"><span class="step done">2</span> Center</li>
              <li class="description">Choose an assistence center</li>
              <li class="cta-button">                
                <a href="#" data-dropdown="center" class="button dropdown">Choose</a><br>
                <ul id="center" data-dropdown-content class="f-dropdown">
                  <li><a href="#">Boulder</a></li>
                  <li><a href="#">Denver</a></li>
                </ul>
              </li>
            </ul>
          </div>
 
          <div class="large-3 small-12 columns">
            <ul class="pricing-table">
              <li class="title step3"><span class="step done">3</span> Form</li>
              <li class="description">Fill out one form</li>
              <li class="cta-button"><a class="typeform-share button" id="start-form" href="https://avantassel.typeform.com/to/ToheBD" data-mode="1" target="_self">Get Started</a></li>
            </ul>
          </div>
 
          <div class="large-3 small-12 columns">
            <ul class="pricing-table">
              <li class="title step4"><span class="step done">4</span> Status</li>
              <li class="description">Track your status with the state</li>
              <li class="cta-button"><a class="button" href="#">Track</a></li>
            </ul>
          </div>
 
        </div>
 
        <div class="row"> 
            <div class="large-12 columns">
              <h2>Your forms have been submitted to the assistence center.</h2>
          <div class="progress small-12 large-12 success] radius">
            <span class="meter" style="width: 10%"></span>            
          </div>
          </div>
        </div>

      <!-- End Steps -->
 
          <div class="row"> 
            <div class="large-12 columns">
              <div class="radius panel">
                <div id="maparea">
                  
                </div>            
            </div> 
            </div>
          </div>
 
      <!-- Footer -->
 
        <footer class="row">
        <div class="large-12 columns"><hr />
            <div class="row">
 
              <div class="large-6 columns">
                  <p>&copy; <?=date('Y')?></p>
              </div>
 
              <div class="large-6 columns">
                  <ul class="inline-list right">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="/login.php">Admin Login</a></li>
                  </ul>
              </div>
 
            </div>
        </div>
      </footer>
 
      <!-- End Footer -->
 
    </div>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.geolocation.js"></script>
    <script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'share-button.css';s=gt.call(d,'head')[0];}})()</script>
    <script type="text/javascript">

    $(document).ready(function () {
    
    locate();

    $('#locate').on('click',function(){
      locate();
    });

    $('#center li').on('click',function(){
      $('.step2 span').addClass('done');
      $center = $(this).find('a').html();
      $href = $('#start-form').attr('href');
      $('#start-form').attr('href',$href+'&center='+$center);
    });

    function locate(){
      $('#maparea').html('<img src="images/spinner.gif"/> Getting your Location...');

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

          $('.step1 span').addClass('done');
      });
    }
});

    </script>
    
    <script>
      $(document).foundation();      
    </script>
  </body>
</html>
