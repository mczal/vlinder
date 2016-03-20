var vlinderModule = angular.module('vlinderModule',[
	'ngRoute',
	'vlinderController'
]);

vlinderModule.config(['$routeProvider',
	function($routeProvider){
		$routeProvider.
		when('/home',{
			'templateUrl': 'partials/home.html',
            'controller': 'homeController'
		}).
		when('/clients',{
			'templateUrl': 'partials/clients.html',
            'controller': 'clientsController'
		}).
		when('/spirit',{
			'templateUrl': 'partials/spirit.html',
            'controller': 'spiritController'
		}).
		when('/provisions',{
			'templateUrl': 'partials/provisions.html',
            'controller': 'provisionsController'
		}).
		when('/gallery',{
			'templateUrl': 'partials/gallery.html',
            'controller': 'galleryController'
		}).
		when('/gallery-detail/:id',{
			'templateUrl':'partials/gallery-detail.html',
			'controller':'galleryDetailController'
		}).
		when('/contact',{
			'templateUrl': 'partials/contact.html',
            'controller': 'contactController'
		}).
		when('/feature',{
			'templateUrl': 'partials/feature.html',
            'controller': 'featureController'
		}).
		otherwise({
			'redirectTo':'/home'
		});
	}
]);
