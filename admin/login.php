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
      
    	<form action="api_login.php" method="post">
        <label> Login: </label>
        <br />
      		<input type="text" ng-model="login" name="login" placeholder="Digite seu usuario" /> <br />
      		<input type="password" ng-model="senha"name="senha" placeholder="Digite sua senha" /><br />
      		<input type="submit" ng-model="enviar" value"OK"></input>
  		</form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js" ></script>
    <script src="js/controller.js" ></script>
  </body>
</html>
