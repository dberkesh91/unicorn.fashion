angular.module('products', ['rzModule'])
    .service('productsService', ['$log', '$http', '$q', function ($log, $http, $q) {
        var vm = this;
        
        vm.products = [];

        vm.getProducts = function() {
            return vm.products;
        }

        vm.loadAllProducts = function() {
            var deferred = $q.defer();

            $http.get(apiPath() + "products?action=search").then(function(response){
                console.log(response.data);
                vm.products = response.data;
                deferred.resolve();
            });

            return deferred.promise;            
        }

        vm.loadProducts = function(filters) {
            var params = {
                filters: filters,
                action: 'search'
            }
            var deferred = $q.defer();

            $http.post(apiPath() + "products", params).then(function(response){
                console.log(response.data);
                vm.products = response.data;
                deferred.resolve();
            });

            return deferred.promise;  
        }

        apiPath = function() {
            return 'http://unicorn.fashion/uf_api/';
        }

    }])

    .controller('productsController', ['$scope', 'productsService', function ($scope, productsService) {
        var vm = this;
        vm.products = [];

        $scope.slider = {
            min: 0,
            max: 5000,
            options: {
              floor: 0,
              ceil: 5000,
            },
          }

        productsService.loadAllProducts().then(function(result){
            vm.products = productsService.getProducts();
        });

         vm.applyFilters = function() {
             console.log($scope.slider);
             var filters = {
                 minPrice: $scope.slider.min,
                 maxPrice: $scope.slider.max
             };

             productsService.loadProducts(filters).then(function(result){
                vm.products = productsService.getProducts();
             });
         } 
        
    }])