<?php

$app->addMiddleware('before', function($container) {
    session_start();
});

$app->addMiddleware('before', function($container) {
    header('Content-Type: text/html');
});

$app->addMiddleware('before', function($container) {
    if (!preg_match('/^\/api\/*./', $container['router']->getCurrentUrl())) {
        return;
    }
    
    $data = (new \App\Controllers\UsersControllers)->getCurrentUser($container);
    
    $container['loggedUser'] = function () use ($data) {
        return $data;
    };
});