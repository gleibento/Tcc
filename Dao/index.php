<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './config.php';
//$sql = new Sql();
//
//$pessoa = $sql->select("select * from produto order by nome");
//echo "<pre>";
//echo \json_encode($pessoa);
//echo '<br/>';
//echo "<pre/>";
$produto = new Produto();
 $produto->loadById(4);
 echo $produto;