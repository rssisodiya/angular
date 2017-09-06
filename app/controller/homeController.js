/* myApp.controller('homeController', function($scope) {     
    $scope.message = 'Welcome to the home page...';     
});
*/
myApp.controller("homeController", function($scope, $http){
    $http.get('api/home.php').then(function(response){
		$scope.result = response.data;
    });
});