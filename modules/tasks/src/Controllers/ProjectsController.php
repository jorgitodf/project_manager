<?php

namespace App\Framework\Tasks\Controllers;

use App\Framework\CrudController;

class ProjectsController extends CrudController
{
    protected function getModel(): string
    {
        return 'projects_model';
    }
}