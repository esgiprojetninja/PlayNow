<?php

require dirname(__DIR__).'/vendor/autoload.php';

$router = new Playnow\app\router\Route();

$router::get('index', function () {
    var_dump($_SERVER);
});

