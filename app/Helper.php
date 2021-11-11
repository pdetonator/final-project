<?php

    // GET Methodundan Zararlı Kodlar Gönderilmemesi için
    $_GET = array_map(function($get){
        return htmlspecialchars(trim($get));
    },$_GET);


    // POST Methodundan Zararlı Kodlar Gönderilmemesi için
    $_POST = array_map(function($post){
        return htmlspecialchars(trim($post));
    },$_POST);

?>