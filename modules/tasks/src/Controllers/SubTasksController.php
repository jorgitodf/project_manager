<?php

namespace App\Framework\Tasks\Controllers;

use App\Framework\CrudController;

class SubTasksController extends CrudController
{
    protected function getModel(): string
    {
        return 'subtasks_model';
    }

    public function listByTask($container, $request)
    {
        $id = $request->query->get('id');
        return $container['subtasks_model']->all(['task_id'=>$id]);
    }
}