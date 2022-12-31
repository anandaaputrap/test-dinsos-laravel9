<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'AdminAnanda',
                'username' => 'admin1',
                'password' => bcrypt('123456'),
                'level' => 1,
                'email' => 'admin@ananda.com'
            ],
            [
                'name' => 'AdminHabibullah',
                'username' => 'admin2',
                'password' => bcrypt('123456'),
                'level' => 1,
                'email' => 'admin@habibullah.com'
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
