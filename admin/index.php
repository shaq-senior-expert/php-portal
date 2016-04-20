<!DOCTYPE html>
<html lang="pt-br" ng-app="app">
  <head>
    <meta charset="utf-8">
    <title>Portal Melhor Idade</title>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/padrao.css">

  </head>
  <body>
    <main>
      <header class="menu">
        <nav  ng-controller="contatoCtrl">
          <ul>
            <li ng-repeat="menu in contatos"><a href="#">{{menu.email}}</a></li>
          </ul>
        </nav>
      </header>
    </main>

    <div>
      {{phones}}
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js" ></script>
    <script src="js/controller.js" ></script>
  </body>
</html>
