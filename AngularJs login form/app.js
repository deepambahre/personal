angular.module('ngpatternApp', [])
.controller('ngpatternCtrl', ['$scope', function($scope) {
  $scope.customer = {
    name: 'Naomi',
    address: '1600 Amphitheatre'
  };
}])