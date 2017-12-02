var app = angular.module('myApp', ['ngRoute', 'ui.bootstrap', 'ngAnimate']);

app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
    when('/', {
      title: 'Hotel Inventory',
      templateUrl: 'partials/products.php',
      controller: 'productsCtrl'
    })
    .otherwise({
      redirectTo: '/'
    });;
}]);
    