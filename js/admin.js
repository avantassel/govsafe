angular.module('govsafeApp', []).
controller('AdminCtrl', function($scope,$http,$q,$sce) {

	$scope.responses = {};
	$scope.totalSurvivors = 0;

	function setSurvivors(data){
		$scope.responses = data.responses;			
		$scope.totalSurvivors = data.stats.responses.completed;

		setTimeout(function(){
			getSurvivors();
		},500);
	}

	function getSurvivors(){
		
        $http.get('getsurvivors.php',{timeout: 10000}).then(function(response){

            setSurvivors( response.data ); 
                    
        });        
      }

	getSurvivors();
	
	$scope.hasList = function(k,v){
		if(k.indexOf('list')!=-1)
			return 'help-needed';
		else
			return '';
	};

$scope.toggleSave = function(e){
	var helpElement = angular.element(e.target);

    if(helpElement.hasClass('saved')){
      helpElement.removeClass('saved');
    } else {
      helpElement.addClass('saved');
    }
};

$scope.getAnswers = function(answers,search){
	var help = "";
	$.each(answers, function(k,v){
		if(k.indexOf(search) != -1 && v != "")
			help += '</br>&bull;'+v;
	});
	return $sce.trustAsHtml(help);
};

  $scope.markers = [];
  var myLatlng = new google.maps.LatLng(39.733494799999995,-104.9926846);
  var mapOptions = {
      center: new google.maps.LatLng(39.733494799999995,-104.9926846),
      zoom: 10,
      panControl: true,
      zoomControl: true,
      scaleControl: true              
  };
  $scope.map = new google.maps.Map(document.getElementById("maparea"), mapOptions);
  $scope.markerCluster = new MarkerClusterer($scope.map);

	$scope.$watch('totalSurvivors',function(oldVal,newVal){
		if(oldVal==newVal || !$scope.responses)
			return;

		$scope.markerCluster.clearMarkers();
		$.each($scope.responses,function(k,v){
			if(v.hidden.location){
				var loc = v.hidden.location.split(',');
	    		var marker = new google.maps.Marker({
	          		position: new google.maps.LatLng(loc[0],loc[1])
	          		,icon: '/images/user.png'
	        	});
	        	
	    		$scope.markerCluster.addMarker(marker);	    		
	    	}
	    });              	    	    
	});
});