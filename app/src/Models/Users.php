<?php

namespace App\Models;

use App\Framework\Model;

class Users extends Model
{
    protected $table = 'users';

    public function setPassword($password)
    {
        return password_hash($password, \PASSWORD_DEFAULT);
    }

    public function getByEmail($email)
    {
        return parent::get(['email' => $email]);
    }
}