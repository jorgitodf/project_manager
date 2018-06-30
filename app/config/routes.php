<?php


$router->add('GET', '/', function() use ($container) {
    return "Estamos na HomePage";
});

$router->add('GET', '/users/(\d+)', '\App\Controllers\UsersControllers::show');