<?php

namespace App\Controllers;

use App\Models\Users;

class UsersControllers
{
    public function show($container, $request)
    {
        $user = new Users($container);
        $user->create(['name' => 'Jorgito']);
        $data = $user->get($request->attributes->get(1));

        return $data;
    }
}