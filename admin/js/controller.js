var app = angular.module('app', ['ngResource']);

app.controller('contatoCtrl', function ($scope, $http) {
  $scope.menu = "http://localhost/Exercicios/portal/admin/menu.php";
  $http({
    method: 'GET', url: $scope.menu
  }).success(function(data){
    angular.forEach(data, function(value, key){
      $scope.id = value.id;
      $scope.titulo = value.titulo;
      $scope.link = value.link;
        console.log($scope.titulo);
     });
  });
});