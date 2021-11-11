<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    use UNLCE\Http\Router;
    use UNLCE\Http\Controller;
    use UNLCE\Http\Model;

    require __DIR__ . '/vendor/autoload.php';

    Router::run('/', 'Home@index', ['GET', 'POST']);
    Router::run('/uye-ol', 'Register@index');
    Router::run('/uye-ol', 'Register@userRegister', ['POST']);
    Router::run('/giris-yap', 'Login@index');
?>