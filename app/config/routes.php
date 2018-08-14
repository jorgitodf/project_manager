<?php

$router->add('GET', '/', function () {
    return file_get_contents(__DIR__ . '/../../template/index.html');
});

$router->add('POST', '/auth/register', '\App\Controllers\UsersControllers::register');
$router->add('POST', '/auth/token', '\App\Controllers\UsersControllers::getToken');
$router->add('GET', '/api/me', function($container) {
    header('Content-Type: application/json');
    $data = (new \App\Controllers\UsersControllers)->getCurrentUser($container);

    return $data;
});
