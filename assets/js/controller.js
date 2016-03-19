var vlinderController = angular.module('vlinderController',[]);

vlinderController.controller('clientsController',['$scope','$routeParams','$http',
	function($scope,$routeParams,$http){
		$http.get("assets/json/clientsJson.php").success(function(data){
			$scope.myClients = data;
		});
	}
]);

vlinderController.controller('contactController',['$scope','$routeParams','$http',
	function($scope,$routeParams,$http){

	}
]);

vlinderController.controller('featureController',['$scope','$routeParams','$http',
	function($scope,$routeParams,$http){

	}
]);

vlinderController.controller('galleryController',['$scope','$routeParams','$http',
	function($scope,$routeParams,$http){
		$http.get("assets/json/galleryTextJson.php").success(function(data){
			$scope.myGallery = data;
		});
	}
]);

vlinderController.controller('galleryDetailController',['$scope','$routeParams','$http',
	function($scope,$routeParams,$http){
		$http.get("assets/json/galleryTextJson.php?id="+$routeParams.id).success(function(data){
			$scope.myGalleryText = data;
			//alert(data+" text");
		});
		$http.get("assets/json/galleryDetailJson.php?id="+$routeParams.id).success(function(data){
			$scope.myGallery = data;
			$scope.testing = "abcd";
			//alert(data+" "+data[0].url);
		});
	}
]);

vlinderController.controller('provisionsController',['$scope','$routeParams','$http',
	function($scope,$routeParams,$http){
		$http.get("assets/json/provisionJson.php").success(function(data){
			$scope.myProvisions = data;
		});
	}
]);

vlinderController.controller('spiritController',['$scope','$routeParams','$http',
	function($scope,$routeParams,$http){

	}
]);

vlinderController.controller('homeController',['$scope','$routeParams','$http',
	function($scope,$routeParams,$http){

	}
]);


/*/bench
adminController.controller('transactionController', ['$scope' , '$routeParams', '$http',
	function($scope,$routeParams,$http){
		$scope.transactions = [
			{id:'t1',name:'Transaction A'},
			{id:'t2',name:'Transaction B'},
			{id:'t3',name:'Transaction C'}
		];
	}
]);*/
