<?php

require 'environment.php';

global $config;
$config = array();

if (ENVIRONMENT == 'development') {
    define("BASE", "https://simple-finance-erlancarreira.c9users.io/");
    define("BASEADMIN", "http://localhost/s_finance/App/admin/");
    $config['dbname'] = 'c9';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'erlancarreira';
    $config['dbpass'] = '';
} else {
    define("BASE", "https://seudominio_real/");
    define("BASEADMIN", "https://simple-finance-erlancarreira.c9users.io/");
    $config['dbname'] = 'dbname';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'user';
    $config['dbpass'] = 'password';
}

