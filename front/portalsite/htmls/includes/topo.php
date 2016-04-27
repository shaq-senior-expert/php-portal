<!DOCTYPE html>
<html lang="pt-br" ng-app="app">
<head>
	<meta charset="UTF-8">
	<title>:: Melhor idade ::</title>
</head>
<body>
	<header ng-controller="contatoCtrl">
		<nav>
			<ul ng-repeat="titulos in menu">
				<li><a href="{{titulos.link}}">{{titulos.titulo}}</a></li>
			</ul>
		</nav>
	</header>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js" ></script>
    <script src="midia/js/controller/controller.js" ></script>
</body>
</html>