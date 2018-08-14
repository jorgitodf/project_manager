<?php

$container['projects_model'] = function ($container) {
    $id = $container['loggedUser']['user']->id;
    $projects = new \App\Framework\Tasks\Models\Projects($container);
    $projects->user_id = $id;
    return $projects;
};

$container['tasks_model'] = function ($container) {
    $id = $container['loggedUser']['user']->id;
    $tasks = new \App\Framework\Tasks\Models\Tasks($container);
    $tasks->user_id = $id;
    return $tasks;
};

$container['sections_model'] = function ($container) {
    $id = $container['loggedUser']['user']->id;
    $sections = new \App\Framework\Tasks\Models\Sections($container);
    $sections->user_id = $id;
    return $sections;
};

$container['subtasks_model'] = function ($container) {
    $id = $container['loggedUser']['user']->id;
    $subtasks = new \App\Framework\Tasks\Models\SubTasks($container);
    $subtasks->user_id = $id;
    return $subtasks;
};