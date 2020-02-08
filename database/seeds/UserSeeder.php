<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // array of users to populate the database
        $users = [
            [
                'id' => 1,
                'username' => 'Paul Richards',
                'email' => 'johnsnowtest@gmail.com',
                'password' => 'snowboard',
                'user_image' => 'https://randomuser.me/api/portraits/men/31.jpg'
            ],
            [
                'id' => 2,
                'username' => 'Timothy Blanchard',
                'email' => 'timothynowtest@gmail.com',
                'password' => 'norornever',
                'user_image' => 'https://randomuser.me/api/portraits/men/86.jpg'
            ],
            [
                'id' => 3,
                'username' => 'Jessica Stones',
                'email' => 'jessicastonetest@gmail.com',
                'password' => 'archipelago',
                'user_image' => 'https://randomuser.me/api/portraits/women/47.jpg'
            ],
            [
                'id' => 4,
                'username' => 'Laura Vitale',
                'email' => 'lauravitaletest@gmail.com',
                'password' => 'laurina',
                'user_image' => 'https://randomuser.me/api/portraits/women/26.jpg'
            ],

        ];

        foreach ($users as $user) {
            User::create(array(
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['username'],
                'password' => $user['password'],
                'user_image' => $user['user_image']
            ));
        }
    }
}
