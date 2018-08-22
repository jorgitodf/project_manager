<?php

$container['schedules_model'] = function ($container) {
    $id = $container['loggedUser']['user']->id;
    $schedules = new \App\Framework\Schedules\Models\Schedules($container);
    $schedules->user_id = $id;
    return $schedules;
};
