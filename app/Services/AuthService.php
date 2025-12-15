<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Exception;

class AuthService
{
    protected $users;

    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * Register a new user based on registration mode.
     */
    public function register(array $data)
    {
        // Step 1: Get registration mode
        $mode = DB::table('settings')->where('key', 'registration_mode')->value('value');

        $inviter = null;

        // Step 2: If invite mode → invite code required
        if ($mode === 'invite') {

            if (empty($data['invite_code'])) {
                throw new Exception("Invite code is required in invite mode.");
            }

            $inviter = $this->users->findByInviteCode($data['invite_code']);

            if (!$inviter) {
                throw new Exception("Invalid invite code.");
            }
        }

        // Step 3: Prepare user data
        $userData = [
            'name'        => $data['name'],
            'email'       => $data['email'],
            'password'    => bcrypt($data['password']),
            'invite_code' => Str::upper(Str::random(10)),
            'invited_by'  => $inviter?->id,
            'team_id'     => $inviter?->team_id,
        ];

        // Step 4: Create user
        return $this->users->createUser($userData);
    }
}
