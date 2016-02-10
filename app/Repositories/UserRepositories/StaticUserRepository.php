<?php namespace HubIT\Repositories\UserRepositories;

use HubIT\Models\User;

/**
 * Static users. Please add your first name (the only required), last name, an url with an avatar of yours, and a website.
 */
class StaticUserRepository implements UserRepository
{

    public function getAll()
    {
        $rawUsers = [
            [
                'fName'   => 'Rizart',
                'lName'   => 'Dokollari',
                'role'    => 'First Ranger',
                'avatar'  => 'https://avatars3.githubusercontent.com/u/4212119?v=3&s=460',
                'website' => 'https://github.com/rdok'
            ],

            [
                'fName'   => 'Antony',
                'lName'   => 'Kalogeropoulos',
                'role'    => 'Lord Commander',
                'avatar'  => 'https://avatars0.githubusercontent.com/u/9202029?v=3&s=460',
                'website' => 'https://github.com/PadawanTony/'
            ],

//            [
//                //  Input your data here similar to above
//                'fName'   => '',
//                'lName'   => '',
//                'avatar'  => '',
//                'website' => ''
//            ],
        ];


        $users = [];

        foreach ($rawUsers as $rawUser) {
            $users[] = new User($rawUser);
        }

        return $users;
    }
}