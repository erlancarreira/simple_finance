<?php

require 'environment.php';

global $config;
$config = array();

if (ENVIRONMENT == 'development') {
    define("BASE", "http://localhost/s_finance/");
    define("BASEADMIN", "http://localhost/s_finance/App/admin/");
    $config['dbname'] = 'projeto_er';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    define("BASE", "https://seudominio_real/");
    define("BASEADMIN", "https://seudominio_real/admin/");
    $config['dbname'] = 'dbname';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'user';
    $config['dbpass'] = 'password';
}

