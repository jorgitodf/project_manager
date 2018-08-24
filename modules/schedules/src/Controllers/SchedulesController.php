<?php

namespace App\Framework\Schedules\Controllers;

use App\Framework\CrudController;

class SchedulesController extends CrudController
{
    protected function getModel(): string
    {
        return 'schedules_model';
    }
}