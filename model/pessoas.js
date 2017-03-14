/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var modulosPessoa = angular.module('modulosPessoa', []);
modulosPessoa.controller("controllerPessoa", function ($scope) {
    $scope.pessoas = [
        {
            codigo: 1, nome: 'Glei', sobrenome: 'Bento Domingos', telefone: '11 3458 3155',
            celular: '11 9 87713657', rua: 'São Domingos', numero: '362', bairro: 'Parque Das Americas',
            cidade: 'Maua', email: 'glei-bento@hotmail.com', rg: '16534762', cpf: '082.532.046-12'
        },
        {
            codigo: 2, nome: 'Glei', sobrenome: 'Bento Domingos', telefone: '11 3458 3155',
            celular: '11 9 87713657', rua: 'São Domingos', numero: '362', bairro: 'Parque Das Americas',
            cidade: 'Ribeirão Pires', email: 'gleibento@hotmail.com', rg: '16534762', cpf: '082.532.046-12'
        }
    ];
    $scope.selecionarPessoa = function (localSelecionado) {
        $scope.pessoa = localSelecionado;
    };
    $scope.limparCampos = function () {
        $scope.pessoa = "";
    }
});
