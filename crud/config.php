<?php
//Simple MVC Configuration File
//Inicialização da variável $config
unset($config);
$config = new stdClass();
$config->defaultClass = "Home";
$config->base_url = '/dawii/crud/';
$config->url = 'http://' . $_SERVER['HTTP_HOST'] . $config->base_url;
$config->asset = $config->base_url . 'view/templates/';
$config->template = 'default';
//FTP: senha nome
//Database
$server_host = filter_input(INPUT_SERVER, 'HTTP_HOST');
$server_os = strpos(filter_input(INPUT_SERVER, 'SERVER_SOFTWARE'),'Ubuntu');
if ($server_host === "localhost") {
    $config->dbuser = 'root';
    $config->dbpassword ='';
    $config->dbname = 'dawii';
    $config->dbhost = 'localhost';
    $config->dbdrive = 'mysql'; 
} else {
    $config->dbuser = 'root';
    $config->dbpassword = '';
    $config->dbname = 'dawii';
    $config->dbhost = 'localhost';
    $config->dbdrive = 'mysql';
}

