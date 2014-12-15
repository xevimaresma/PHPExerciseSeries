'use strict';

/* Controllers */

angular.module('myApp.controllers', [])
  .controller('MyCtrl1', ['$scope','$http', function($scope, $http) {
    $scope.reverse = function(name){

        $http.get('http://localhost:3000/app_dev.php/reverses/'+name+'.json').
        success(function(data, status, headers, config){
          $scope.reversed_name = data.name;
        }).
        error(function(data, status, headers, config){
          $scope.reversed_name = 'error';
        });
    };
  }]);
