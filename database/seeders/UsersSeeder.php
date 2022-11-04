<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =
            [
                [
                    'name'        => 'isUser',
                    'username'    => 'isUser',
                    'email'       => 'user@mail.com',
                    'password'    => bcrypt('12345'),
                    'roles_id'    => 2,
                ],
                [
                    'name'        => 'isAdmin',
                    'username'    => 'isAdmin',
                    'email'       => 'adminr@mail.com',
                    'password'    => bcrypt('12345'),
                    'roles_id'    => 1,
                ]
            ];
    }
}
