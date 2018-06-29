<?php

$app->addMiddleware('before', function($c) {
    session_start();
});

$app->addMiddleware('before', function($c) {
    header('Content-Type text/html');
});

$app->addMiddleware('after', function($c) {
    
});