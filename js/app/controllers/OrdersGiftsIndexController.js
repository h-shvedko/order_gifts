app.controller('OrdersGiftsIndexController', 
			   ['$scope', '$rootScope', 'Products', '$location', 
			   function ($scope, $rootScope, Products, $location) {

	
	$scope.products = Products.get();
	
	$rootScope.$on('product:geted', function() {
	
		if ($scope.products.length === 0 || $scope.products.length === undefined) 
		{
			$scope.products = Products.get();
		}
	});	
}]);