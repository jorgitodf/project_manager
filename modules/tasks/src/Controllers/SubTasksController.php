<?php

namespace App\Framework\Tasks\Controllers;

use App\Framework\CrudController;

class SubTasksController extends CrudController
{
    protected function getModel(): string
    {
        return 'subtasks_model';
    }
}