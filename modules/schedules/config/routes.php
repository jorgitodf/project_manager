<?php

$router->add('GET', '/api/schedules', 'App\Framework\Schedules\Controllers\SchedulesController::index');
$router->add('POST', '/api/schedules', 'App\Framework\Schedules\Controllers\SchedulesController::create');
