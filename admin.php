
<?
$api_key = '06e283cf9a2f96c5674821ef2335742b8f4a362b';
$api_url = 'https://api.typeform.com/v0/form/ToheBD?key=06e283cf9a2f96c5674821ef2335742b8f4a362b&completed=true';
$users = "";

$api_response=@file_get_contents($api_url);
if(!empty($api_response))
  $api_response_json=json_decode($api_response);
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
    <script src="js/cluster.js"></script>    
  </head>
  <body ng-app="govsafeApp">
    

 <div class="row full-width" ng-controller="AdminCtrl">
    <div class="large-12 columns">
 
      <!-- Navigation -->
 
        <ul class="button-group">
          <li><a href="index.php" class="button">Home</a></li>
          <li><a href="admin.php" class="button">Admin</a></li>
          <li><a href="admin-volunteers.php" class="button">Volunteers</a></li>
        </ul>
 
      <!-- End Navigation -->
 
      <!-- Header Content -->
 
        <div class="row panel">
 
          <div class="large-12 columns">
            
            <p>
                SAFE is the Survivor Assistance Form Editor
            </p>
            <h2><span>{{totalSurvivors}}</span> Survivors</h2>

            <h5 class="subheader"></h5>
            </div>
          
        </div>
 
      <!-- End Header Content -->
 
 
      <!-- Steps -->
 
        <div class="row steps" >
          <div class="large-12 columns">

          <div id="maparea"></div>

          <? if(!empty($api_response_json)){ ?>
          <table>
          <thead>
            <tr>
              <th></th>
              <th>Date</th>
              <? foreach($api_response_json->questions as $q){ ?>
              <th><?=$q->question?></th>
              <? } ?>
            </tr>
          </thead>
          <tbody>            
            <tr ng-repeat="response in responses">
              <td><button class="button">Print</button></td>
              <td>{{response.metadata.date_submit}}</td>              
              <td ng-repeat="(k,v) in response.answers" ng-class="hasList(k,v)" ng-click="toggleSave($event)">
                {{v}}
              </td>
              <td ng-repeat="(k,v) in response.hidden" ng-class="hasList(k,v)" ng-click="toggleSave($event)">
                {{v}}
              </td>    
            </tr>
            
          </tbody>
        </table>
        <? } ?>
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
                  </ul>
              </div>
 
            </div>
        </div>
      </footer>
 
      <!-- End Footer -->
 
    </div>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/jquery.geolocation.js"></script>
    <script src="js/admin.js"></script>
        
      <script type="text/javascript">
        $(document).foundation();            
      </script>
  </body>
</html>
