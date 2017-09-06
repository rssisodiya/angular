var myApp = angular.module('myApp', []); 
myApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/home', {
        templateUrl: 'app/view/home.html',
        controller: 'homeController'
    }).
      when('/login', {
        templateUrl: 'app/view/login.html',
        controller: 'loginController'
      }).
	  when('/contact',{
		templateUrl:'app/view/contact.html',
		controller: 'contactController'
	  }).
      otherwise({
        redirectTo: '/home'
      });
}]);
