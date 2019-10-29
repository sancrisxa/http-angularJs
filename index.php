<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="angular.min.js"></script>
</head>
<body ng-app="meuApp" ng-controller="meuCtrl">
    <h2>Lista de nomes</h2>

    <ul>
        <li ng-repeat="x in nomes">{{ x.nome }} tem {{ x.idade }} anos</li>
    </ul>

    <script>
        var app = angular.module('meuApp', []);

        app.controller('meuCtrl', function($scope, $http){
            
            $scope.nomes = [];
            $http.get('http://phpdozeroaoprofissional.com.br/testeangularjs.php').then(function(response){
                $scope.nomes = response.data.resultado;
            });
        })
    </script>
</body>
</html>