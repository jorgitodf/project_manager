<?php

namespace App\Framework\Tasks;

use App\Framework\Modules\Contract;

class Module implements Contract
{
    public function getNamespaces():array
    {
        return [
            'App\\Framework\\Tasks\\' => __DIR__.'/src'
        ];
    }

    public function getContainerConfig()
    {
        return __DIR__ . '/config/containers.php';
    }

    public function getEventConfig()
    {
        return __DIR__ . '/config/events.php';
    }

    public function getMiddlewareConfig()
    {
        return __DIR__ . '/config/middlewares.php';
    }

    public function getRouteConfig()
    {
        return __DIR__ . '/config/routes.php';
    }
}