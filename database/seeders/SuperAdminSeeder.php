<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'superadmin@ipamt.com'],
            [
                'name'        => 'Super Admin',
                'password'    => Hash::make('SuperAdmin@123'),
                'role'        => 'super_admin',
                'invite_code' => 'SUPERADMIN',
                'invited_by'  => null,
                'team_id'     => null,
            ]
        );
    }
}
