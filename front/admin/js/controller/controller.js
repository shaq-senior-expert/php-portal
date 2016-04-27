var app = angular.module('app', []);

app.controller('contatoCtrl', function ($scope, $http) {
	$http.get('http://localhost/portalidadesa/portal/back/menuIdoso.php')
    .success(function(retorno) {
    	var titulo = retorno[0]['titulo'];
    	var url = retorno[0]['url'];

    	console.log(titulo, url);
    })
    .error(function(erro) {
        console.log(erro);
    });

});
