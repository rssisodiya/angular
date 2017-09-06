myApp.controller('registerController', function($scope, $http) {     
    $scope.message = 'Registration';  	
	$scope.submit=function(){		
		$http.post("api/register.php", {
			'name':$scope.name,
			'email':$scope.email,
			'phone':$scope.phone,
			'status':0
			})
		.success(function(data,status,headers,config){
			 $scope.response = data.status;
		});
	}
	
});