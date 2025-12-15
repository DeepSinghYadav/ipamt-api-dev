<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Class AuthService
 *
 * Handles all authentication-related business logic.
 * Supports both registration modes:
 * - invite : invite_code required
 * - open   : invite_code optional
 */
class AuthService
{
    protected $users;

    /**
     * Inject UserRepository for DB operations.
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * Register a new user based on registration mode.
     *
     * @param array $data
     * @return mixed
     */
    public function register(array $data)
    {
        // Logic will be added in next step
    }
}
