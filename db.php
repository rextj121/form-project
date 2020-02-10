<?php
    $db['db_host']= 'localhost';
    $db['db_root']= 'root';
    $db['db_pass']= '';
    $db['db_name']= 'form';

    foreach($db as $key=> $value){
        define(strtoupper($key), $value);
    }

    // define('HOST', 'localhost');
    // define('ROOT', 'root');
    // define('PASS', '');
    // define('NAME', 'cmss');

    $connection= new mysqli(DB_HOST, DB_ROOT, DB_PASS, DB_NAME);