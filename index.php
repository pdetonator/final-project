<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();

    use UNLCE\Http\Router;  
    use UNLCE\Http\Controller;
    use UNLCE\Http\Model;

    require __DIR__ . '/vendor/autoload.php';

    Router::run('/', 'Home@index', ['GET', 'POST']);
    Router::run('/uye-ol', 'Register@index');
    Router::run('/uye-ol', 'Register@userRegister', ['POST']);
    Router::run('/giris-yap', 'Login@index');
    Router::run('/giris-yap', 'Login@userLogin', ['POST']);
    Router::run('/:url', 'Product@index', ['GET', 'POST']);
    Router::run('/api/add-to-basket', 'Basket@add', ['POST']);
    Router::run('/uye/cikis-yap', 'User@userLogout', ['GET', 'POST']);
    Router::error(function () {
        echo '404';
    })
?>