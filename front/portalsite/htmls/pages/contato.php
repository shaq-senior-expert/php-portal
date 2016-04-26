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
      <h1> Entre em contato </h1>
      <form>
        <input type="text" ng-model="nome" name="nome" placeholder="Digite seu nome completo" /><br/>
        <input type="text" ng-model="email" name="email" placeholder="Digite seu e-mail" /><br/>
        <input type="text" ng-model="assunto" name="assunto" placeholder="Digite o assunto da mensagem" /><br/>
        <textarea rows="5" ng-model="mensagem" name="mensagem" placeholder="Digite sua mensagem" /> </textarea><br/>


      </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js" ></script>
    <script src="js/controller.js" ></script>
  </body>
</html>
