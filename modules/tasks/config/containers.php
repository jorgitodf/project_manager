<?php

$container['projects_model'] = function ($container) {
    return new \App\Framework\Tasks\Models\Projects($container);
};