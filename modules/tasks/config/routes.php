<?php

$router->add('GET', '/api/projects', 'App\Framework\Tasks\Controllers\ProjectsController::index');
$router->add('POST', '/api/projects', 'App\Framework\Tasks\Controllers\ProjectsController::create');

