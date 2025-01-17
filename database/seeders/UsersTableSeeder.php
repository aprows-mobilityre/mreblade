<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Phillip Madsen',
                'email'              => 'phillip.madsen@mmi.io',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2023-06-06 22:00:43',
                'two_factor_code'    => '',
                'slug'               => '',
                'first_name'         => 'Phillip',
                'last_name'          => 'Madsen',
                'verification_token' => '',
            ],
            [
                'id'                 => 2,
                'name'               => 'Michael E',
                'email'              => 'michael@mmi.io',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2023-06-06 22:00:43',
                'two_factor_code'    => '',
                'slug'               => '',
                'first_name'         => '',
                'last_name'          => '',
                'verification_token' => '',
            ],
            [
                'id'                 => 3,
                'name'               => 'Jake Barlow',
                'email'              => 'jake.barlow@mmi.io',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2023-06-06 22:00:43',
                'two_factor_code'    => '',
                'slug'               => '',
                'first_name'         => '',
                'last_name'          => '',
                'verification_token' => '',
            ],
            [
                'id'                 => 4,
                'name'               => 'Amy Knudson',
                'email'              => 'amy@mobilityre.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2023-06-06 22:00:43',
                'two_factor_code'    => '',
                'slug'               => '',
                'first_name'         => '',
                'last_name'          => '',
                'verification_token' => '',
            ],
            [
                'id'                 => 5,
                'name'               => 'Steve Dawson',
                'email'              => 'steven@mobilityre.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2023-06-06 22:00:43',
                'two_factor_code'    => '',
                'slug'               => '',
                'first_name'         => '',
                'last_name'          => '',
                'verification_token' => '',
            ],
            [
                'id'                 => 6,
                'name'               => 'Adam Prows',
                'email'              => 'adam.prows@mmi.io',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => now()->toDateTimeString(),
                'two_factor_code'    => '',
                'slug'               => '',
                'first_name'         => 'Adam',
                'last_name'          => 'Prows',
                'verification_token' => '',
            ]
        ];

        User::upsert($users, ['id']);
    }
}
