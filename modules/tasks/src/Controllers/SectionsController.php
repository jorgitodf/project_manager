<?php

namespace App\Framework\Tasks\Controllers;

use App\Framework\CrudController;

class SectionsController extends CrudController
{
    protected function getModel(): string
    {
        return 'sections_model';
    }
}