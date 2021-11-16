<?php

    // GET Methodundan Zararlı Kodlar Gönderilmemesi için
    $_GET = array_map(function($get){
        return htmlspecialchars(trim($get));
    },$_GET);


    // POST Methodundan Zararlı Kodlar Gönderilmemesi için
    $_POST = array_map(function($post){
        return htmlspecialchars(trim($post));
    },$_POST);

    function site_view($name)
    {
        $file = __DIR__ . '/views/' . $name . '.php';

        if (file_exists($file)) require $file;
    }

    function isLogin()
    {
        if (isset($_SESSION['user']['login']) && $_SESSION['user']['login'] === true) return true;
        return false;
    }

    function getLoginUser() 
    {
        if (isLogin()) return $_SESSION['user'];
        return [];
    }

    function pushMessage($data) {
        echo json_encode($data);
    }

    function get_url($path = null) {
        if (!is_null($path)) return SITE_URL . $path;
        return SITE_URL;
    }
?>