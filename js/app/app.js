var app = angular.module('OfficeStoreGifts', ['ngRoute', 'ui.bootstrap', 'ngAnimate', 'angularFileUpload']);

	app.config(['$routeProvider',function($routeProvider){
		$routeProvider.when('/',
		{
			templateUrl:'/office/ordersgifts/Ajaxordergifts/index',
			controller:'OrdersGiftsIndexController'
		});
		
		$routeProvider.otherwise({
			redirectTo: '/'
		});
	}]);