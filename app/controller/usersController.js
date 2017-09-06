myApp.controller('usersController', function($scope, $http) {     
    $scope.title = 'List Users';
	 $http.get('api/users.php').
        success(function(data) {
			$scope.users = data;
    });
});