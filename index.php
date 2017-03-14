<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-BR" ng-app="modulosPessoa">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/angular.min.js"></script>
        <script src="model/pessoas.js"></script>
        <link type="text/css" href="css/style.css" rel="stylesheet"/>
        <link type="text/css" href="css/bootstrap.css" rel="stylesheet"/>
        <link rel="icon" href="img/favico.png">
    </head>
    <body ng-controller="controllerPessoa">
        <div class="container-fluid">
            <header class=" menu">
                <nav class="nav-tabs"> 
                    <ul class="nav nav-pills">
                        <li role="presentation" class=""><a href="#">Cadastro de pessoas</a></li>
                        <li role="presentation"><a href="#">Cadastro de produtos</a></li>
                        <li role="presentation"><a href="#">Cadastro de O.S</a></li>
                        <li role="presentation"><a href="#">Messages</a></li>
                        <li role="presentation"><a href="#">Messages</a></li>
                        <li role="presentation"><a href="#">Messages</a></li>
                    </ul>
                </nav>
            </header>
            <form class="cad">
                <div class="row">
                    <div class="form-group col-md-1">
                        <label for="codigo">Codigo</label>
                        <input type="text" ng-model="pessoa.codigo" class="form-control" id="codigo">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nome">Nome</label>
                        <input type="text" ng-model="pessoa.nome" class="form-control" id="nome">
                    </div>
                    <div class="form-group col-md-7">
                        <label for="sobreNome">SobreNome</label>
                        <input type="text" ng-model="pessoa.sobrenome" class="form-control" id="sobreNome">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="telefone">Telefone</label>
                        <input type="text" ng-model="pessoa.telefone" class="form-control" id="telefone">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="celular">Celular</label>
                        <input type="text" ng-model="pessoa.celular"class="form-control" id="celular">
                    </div>

                    <div class="form-group col-md-5">
                        <label for="campo1">Rua</label>
                        <input type="text"ng-model="pessoa.rua" class="form-control" id="campo1">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="nº">Nº</label>
                        <input type="text" ng-model="pessoa.numero" class="form-control" id="nº">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="bairro">Bairro</label>
                        <input type="text" ng-model="pessoa.bairro" class="form-control" id="bairro">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="cidade">Cidade</label>
                        <select class="form-control" id="cidade" ng-model="pessoas.codigo"
                                ng-options="pessoa.cidade for pessoa in pessoas track by pessoa.codigo">
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="email">E-Mail</label>
                        <input type="text" ng-model="pessoa.email" class="form-control" id="email">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="rg">Rg</label>
                        <input type="text" ng-model="pessoa.rg" class="form-control" id="rg">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="cpf">Cpf</label>
                        <input type="text" ng-model="pessoa.cpf" class="form-control" id="cpf">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" ng-click="limparCampos()" class="btn btn-default">Novo</button>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <button type="submit" class="btn btn-danger">Cadastrar</button>
                    </div>
                </div>
            </form>
            <table border="1" cellpadding="4" class="table table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>SobreNome</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Telefone</th>
                        <th>Celular</th>
                        <th>E-Mail</th>
                        <th>Nº</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="pessoa in pessoas" ng-click="selecionarPessoa(pessoa)">
                        <td>{{pessoa.codigo}}</td>
                        <td>{{pessoa.nome}}</td>
                        <td>{{pessoa.sobrenome}}</td>
                        <td>{{pessoa.cpf}}</td>
                        <td>{{pessoa.rg}}</td>
                        <td>{{pessoa.telefone}}</td>
                        <td>{{pessoa.celular}}</td>
                        <td>{{pessoa.email}}</td>
                        <td>{{pessoa.numero}}</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
