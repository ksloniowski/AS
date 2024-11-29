<?php
require_once 'Config.class.php';

$config = new Config();

// define('_SERVER_NAME', 'localhost');
$config->server_name = 'localhost:80';
// define('_SERVER_URL', 'http://'._SERVER_NAME);
$config->server_url = 'http://'.$config->server_name;
// define('_APP_ROOT', '/php_03_proste_szablony');
$config->app_root = '/php_04_obiektowosc';
// define('_APP_URL', _SERVER_URL._APP_ROOT);
$config->app_url = $config->server_url.$config->app_root;
// define("_ROOT_PATH", dirname(__FILE__));
$config->root_path = dirname(__FILE__);
?>