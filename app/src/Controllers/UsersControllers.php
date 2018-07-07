<?php

namespace App\Controllers;

use App\Framework\CrudController;

class UsersControllers extends CrudController
{
    protected function getModel(): string
    {
        return 'users_model';
    }
}