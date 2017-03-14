<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author glei-
 */
class Produto {

    private $idProduto;
    private $nome;
    private $descricao;
    private $valor;
    private $quantidade;
    private $dtCadastro;

    function getIdProduto() {
        return $this->idProduto;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getValor() {
        return $this->valor;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function getDtCadastro() {
        return $this->dtCadastro;
    }

    function setDtCadastro($dtCadastro) {
        $this->dtCadastro = $dtCadastro;
    }

    public function loadById($id) {
        $sql = new Sql();
        $query = $sql->select("select * from produto where idProduto = :param", array(
            ":param" => $id
        ));
        if (count($query) > 0) {
            $linha = $query[0];
            $this->setIdProduto($linha['idProduto']);
            $this->setNome($linha['nome']);
            $this->setDescricao($linha['descricao']);
            $this->setValor($linha['valor']);
            $this->setQuantidade($linha['quantidade']);
            //$this->setDtCadastro(new DateTime($linha['dtCadastro']));
        }
    }

    public function __toString() {
        return \json_encode([
            "idProduto" => $this->getIdProduto(),
            "nome" => $this->getNome(),
            "quantidade" => $this->getQuantidade(),
            "descricao" => $this->getDescricao(),
            "valor" => $this->getValor()
            //"dtCadastro" => $this->setDtCadastro()->format("d/m/Y H:i:s")
        ]);
    }
public function insert(){
    $sql = new Sql();
    $sql->query("insert into produto(nome,descricao,quantidade,valor) values()", [
        
        
    ]);
    
}
}
