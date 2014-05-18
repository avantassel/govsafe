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
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
    <script type="text/javascript">
    var pdf;
    </script>
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
 
          <div class="large-10 columns">
            
            <p>
                SAFE is the Survivor Assistance Form Editor
            </p>
            <h2><span>{{totalSurvivors}}</span> Survivors</h2>

            <h5 class="subheader"></h5>
            </div>
            <div class="large-2 columns">

            </div>
        </div>
 
      <!-- End Header Content -->
 
 
      <!-- Steps -->
 
        <div class="row steps" >         
        
          <div class="large-12 columns">

          <div id="maparea"></div>

          <h4 class="subheader">Search</h4>
          <input type="text" placeholder="Search for name, address, center, etc..." ng-model="searchText">            
  
          <table width="100%" ng-table="tableParams" show-filter="true">
          <thead>
            <tr>
              <th></th>
              <th>Date</th>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Center</th>
              <th>ETA</th>              
              <th>Assistance Needed</th>
              <th>Kids and Pets</th>
            </tr>
          </thead>
          <tbody>            
            <tr ng-repeat="response in responses | filter:searchText">
              <td><button onclick="pdf.print();" class="button">Print</button></td>
              <td>{{response.metadata.date_submit}}</td>              
              <td>{{response.answers.textfield_913754}}</td>
              <td>{{response.answers.textarea_913965}}</td>
              <td>{{response.answers.email_913755}}</td>              
              <td>{{response.answers.number_913759}}</td>
              <td>{{response.hidden.center}}</td>
              <td>{{response.answers.dropdown_913966}}</td>
              <td ng-bind-html="getAnswers(response.answers,'list_915095_choice')" class="help-needed" ng-click="toggleSave($event)"></td>
              <td ng-bind-html="getAnswers(response.answers,'list_915092_choice')"></td>
            </tr>            
          </tbody>
        </table>
        
        </div>
        </div>

        <div id="placeholder" style="display:none;"></div>
 
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
    <script src="js/cluster.js"></script>    
    <script src="js/foundation.min.js"></script>
    <script src="js/jquery.geolocation.js"></script>
    <script src="js/admin.js"></script>
    <script type="text/javascript">
        $(document).foundation();            

      function PdfUtil(url) {
          var iframe;
          var __construct = function(url) {
              iframe = getContentIframe(url);
          }
          var getContentIframe = function(url) {
              var iframe = document.createElement('iframe');
              iframe.src = url;
              return iframe;
          }
          this.display = function(parentDomElement) {
              parentDomElement.appendChild(iframe);
          }
          this.print = function() {
              try {
                  iframe.contentWindow.print();
              } catch(e) {
                  throw new Error("Printing failed.");
              }
          }
          __construct(url);
      }

      $(document).ready(function () {    

          pdf = new PdfUtil('/pdf/Sue_Vivor.pdf');
          pdf.display(document.getElementById('placeholder'));         
      });     
    </script>
  </body>
</html>
