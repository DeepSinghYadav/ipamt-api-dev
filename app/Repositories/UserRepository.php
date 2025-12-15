<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function findByInviteCode(string $code)
    {
        return User::where('invite_code', $code)->first();
    }

    public function createUser(array $data)
    {
        return User::create($data);
    }
}
