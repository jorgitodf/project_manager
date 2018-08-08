<?php

$container['projects_model'] = function ($container) {
    return new \App\Framework\Tasks\Models\Projects($container);
};

$container['tasks_model'] = function ($container) {
    return new \App\Framework\Tasks\Models\Tasks($container);
};

$container['sections_model'] = function ($container) {
    return new \App\Framework\Tasks\Models\Sections($container);
};

$container['subtasks_model'] = function ($container) {
    return new \App\Framework\Tasks\Models\SubTasks($container);
};