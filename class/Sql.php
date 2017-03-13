<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sql
 *
 * @author glei-
 */
class Sql extends PDO {

    private $conn;

//    private $dsn = "mysql";
//    private $dbname="teste";
//    private $user="root";
//    private $passWord="";
    public function __construct() {
        try {
            $this->conn = new PDO('sqlite:../db/Pessoa.db');
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            echo $message;
        }
        
    }

    private function setParans($statment, $parameters = array()) {
        foreach ($parameters as $key => $value) {
            $this->setParam($key, $value);
        }
    }

    private function setParam($statment, $key, $value) {
        $statment->bindParam($key, $value);
    }

    public function query($rowQuery, $params = array()) {
        $stmt = $this->conn->prepare($rowQuery);
        $this->setParans($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rowQuery, $params = array())
        {
        $stmt = $this->query($rowQuery, $params);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}
