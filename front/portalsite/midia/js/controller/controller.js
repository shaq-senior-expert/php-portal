var app = angular.module('app', []);

app.controller('contatoCtrl', function ($scope, $http) {
	$http.get('http://localhost/portalidadesa/portal/back/menuIdoso.php')
    .success(function(retorno) {
    	$scope.menu = retorno;

    	console.log(retorno);
    })
    .error(function(erro) {
        console.log(erro);
    });

});
