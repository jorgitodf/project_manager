<?php

namespace App\Controllers;

use App\Framework\Exceptions\HttpException;
use Firebase\JWt\JWT;

class UsersControllers
{
    public function register($container, $request)
    {
        return $container['users_model']->create($request->request->all());
    }

    public function getToken($container, $request)
    {
        $email = $request->request->get('email');
        $password = $request->request->get('password');

        $user = $container['users_model']->getByEmail($email);

        if (!$user) {
            throw new HttpException("Forbidden", 401);
        }

        if (!password_verify($password, $user['password'])) {
            throw new HttpException("Forbidden", 401);
        }

        unset($user['password']);

        $key = 'SECRET KEY';
        $data = ['iat' => time(), 'exp' => time() + (60 * 60 * 24), 'user' => $user];

        $token = JWT::encode($data, $key);
        
        return ['token' => $token];
    }

    public function getCurrentUser($container, $request)
    {
        return [];
    }
}