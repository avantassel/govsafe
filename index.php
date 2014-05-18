<?
  $centers=file_get_contents('centers.json');
  $centers_json=json_decode($centers);
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsbzoLjGocnaRHZF3IBMFVI-X41vPl6qM&sensor=true&libraries=geometry"></script>
  </head>
  <body>
    

 <div class="row">
    <div class="large-12 columns">
 
      <!-- Navigation -->
 
        <ul class="button-group">
          <li><a class="typeform-share button" href="https://avantassel.typeform.com/to/QFKQ48" data-mode="1" target="_self">Volunteer</a></li>          
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
              <li class="cta-button"><a class="button" id="locate" href="#">Locate Me</a></li>
            </ul>
          </div>
 
          <div class="large-3 small-12 columns">
            <ul class="pricing-table">
              <li class="title step2"><span class="step">2</span> Center</li>
              <li class="description">Choose an assistence center</li>
              <li class="cta-button">                
                <a href="#" data-dropdown="center" class="button dropdown">Choose</a><br>
                <ul id="center" data-dropdown-content class="f-dropdown">
                  <? foreach ($centers_json->centers as $c) {?>
                    <li data-lat="<?=$c->lat?>" data-lng="<?=$c->lng?>" data-center="<?=$c->name?>" id="<?=$c->id?>"><a href="#"><?=$c->name?></a></li>
                  <? } ?>
                </ul>
              </li>
            </ul>
          </div>
 
          <div class="large-3 small-12 columns">
            <ul class="pricing-table">
              <li class="title step3"><span class="step">3</span> Form</li>
              <li class="description">Fill out one form</li>
              <li class="cta-button"><a class="typeform-share button" id="start-form" href="https://avantassel.typeform.com/to/ToheBD" data-mode="1" target="_self">Get Started</a></li>
            </ul>
          </div>
 
          <div class="large-3 small-12 columns">
            <ul class="pricing-table">
              <li class="title step4"><span class="step">4</span> Status</li>
              <li class="description">Track the status with the state</li>
              <li class="cta-button"><a class="button" href="#">Track</a></li>
            </ul>
          </div>
 
        </div>
 
      <!-- End Steps -->
 
          <div class="row"> 
            <div class="large-12 columns">
              <div class="radius panel">
                <div id="maparea">
                  <img src="images/spinner.gif"/> Getting your Location...
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
    <script src="js/jquery.geolocation.js"></script>
    
    <script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'share-button.css';s=gt.call(d,'head')[0];}})()</script>
    <script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'share-button.css';s=gt.call(d,'head')[0];}})()</script>

    <script type="text/javascript">
    var form_href = 'https://avantassel.typeform.com/to/ToheBD';
    var loc = '';
    var center = '';
    var center_list = <?=json_encode($centers_json->centers);?>;
    $(document).ready(function () {
    
    locate();

    $('#locate').on('click',function(){
      locate();
    });

    $('#center li').on('click',function(){
      $('.step2 span').addClass('done');
      center = $(this).data('center');   
      $('#start-form').attr('href',form_href+'?location='+loc+'&center='+center);
    });

    function locate(){
      $.geolocation(function (lat, lng) {
          loc=lat+','+lng;

          var myLatlng = new google.maps.LatLng(lat, lng);
          var mapOptions = {
              center: new google.maps.LatLng(lat, lng),
              zoom: 13
          };
          var map = new google.maps.Map(document.getElementById("maparea"), mapOptions);
          var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              icon: '/images/user.png'
          });

          $.each(center_list,function(k,v){
            var from = new google.maps.LatLng(lat,lng);
            var to   = new google.maps.LatLng(v.lat,v.lng);
            var dist = google.maps.geometry.spherical.computeDistanceBetween(from, to);
            $('#'+v.id).html($('#'+v.id).html()+' '+dist);
          });

          <? foreach ($centers_json->centers as $c) {?>
            var marker = new google.maps.Marker({
              position: new google.maps.LatLng(<?=$c->lat.','.$c->lng?>),
              map: map,
              icon: '/images/center.png',
              title: "<?=$c->name?>"
            });     
            
          <? } ?>
          
          $('#start-form').attr('href',form_href+'?location='+loc+'&center='+center);
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
