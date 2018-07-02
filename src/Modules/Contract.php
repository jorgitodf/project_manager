<?php

namespace App\Framework\Modules;

interface Contract 
{
    public function getNamespaces(): array;
    public function getContainerConfig();
    public function getEventConfig();
    public function getMiddlewareConfig();
    public function getRouteConfig();
}