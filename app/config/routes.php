<?php

$router->add('GET', '/', function() use ($container) {
    return file_get_contents(__DIR__ . '/../../template/index.html');
});

//$router->add('GET', '/users', '\App\Controllers\UsersControllers::index');
//$router->add('GET', '/users/(\d+)', '\App\Controllers\UsersControllers::show');
$router->add('POST', '/auth/register', '\App\Controllers\UsersControllers::register');
$router->add('POST', '/auth/token', '\App\Controllers\UsersControllers::getToken');
$router->add('GET', '/api/me', '\App\Controllers\UsersControllers::getCurrentUser');