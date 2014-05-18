
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

          <form>
            <fieldset>
              <legend>Access Admin</legend>

              <label>Username
                <input type="text" id="username" placeholder="test">
              </label>

              <label>Password
                <input type="password" id="password" placeholder="">
              </label>

              <a onclick="login()" class="button">Log On</a>
            </fieldset>
          </form>
          
        </div>
 
      <!-- End Header Content -->
 
 
      <!-- Steps -->
 
        <div class="row ">
 
          
 
        </div>
 
      <!-- End Steps -->

 
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
    <script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'share-button.css';s=gt.call(d,'head')[0];}})()</script>

    <script type="text/javascript">
    function login() {
      if ($('#username').val() == "test") {
        window.location.href = "admin.php";  
      }
      
    }
    </script>
    
    <script>
      $(document).foundation();      
    </script>
  </body>
</html>
