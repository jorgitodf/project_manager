<?php

namespace App\Framework\Tasks\Controllers;

use App\Framework\CrudController;

class TasksController extends CrudController
{
    protected function getModel(): string
    {
        return 'tasks_model';
    }
}