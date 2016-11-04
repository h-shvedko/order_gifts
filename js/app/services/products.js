app.factory('Products', ['$http', '$rootScope', function($http, $rootScope){

	var products = [];
	var first = [];
	
	function getProducts() {
		$http.get('/office/ordersgifts/Ajaxordergifts/GetGiftsOrders')
			.success(function(data, status, headers, config) {
				products = data;
				$rootScope.$broadcast('product:geted');
			})
			.error(function(data, status, headers, config) {
				console.log(data);
			});
	}
	
	getProducts();

	var service = {};

	service.get = function() {
		return products;
	}
	

	return service;
	}]);