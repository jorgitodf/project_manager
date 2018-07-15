<?php


$router->add('GET', '/', function() use ($container) {
    return file_get_contents(__DIR__ . '/../../template/index.html');
});

$router->add('GET', '/users', '\App\Controllers\UsersControllers::index');
$router->add('GET', '/users/(\d+)', '\App\Controllers\UsersControllers::show');
$router->add('POST', '/users', '\App\Controllers\UsersControllers::create');
$router->add('PUT', '/users/(\d+)', '\App\Controllers\UsersControllers::update');
$router->add('DELETE', '/users/(\d+)', '\App\Controllers\UsersControllers::delete');