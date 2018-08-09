<?php

$router->add('GET', '/api/projects', 'App\Framework\Tasks\Controllers\ProjectsController::index');
$router->add('POST', '/api/projects', 'App\Framework\Tasks\Controllers\ProjectsController::create');

$router->add('GET', '/api/sections', 'App\Framework\Tasks\Controllers\SectionsController::listByProject');
$router->add('POST', '/api/sections', 'App\Framework\Tasks\Controllers\SectionsController::create');

$router->add('GET', '/api/tasks', 'App\Framework\Tasks\Controllers\TasksController::listByProject');
$router->add('POST', '/api/tasks', 'App\Framework\Tasks\Controllers\TasksController::create');

$router->add('GET', '/api/subtasks', 'App\Framework\Tasks\Controllers\SubTasksController::index');
$router->add('POST', '/api/subtasks', 'App\Framework\Tasks\Controllers\SubTasksController::create');