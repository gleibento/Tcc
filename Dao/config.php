<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

spl_autoload_register(function  ($ClassName) {
    $fileName = "../class".DIRECTORY_SEPARATOR.$ClassName.".php";
    if(file_exists($fileName)){
        require_once ($fileName);
    }
});
