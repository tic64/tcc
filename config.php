<?php

$config=array();

    define("BASE_URL", "http://localhost/TCC/");
    $config['dbname']='trabalhos_academicos';
    $config['host']='localhost';
    $config['dbuser']='root';
    $config['dbpass']='';

global $pdo;
try {
    $pdo=new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'], $config['dbpass']);
   
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}


