<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
    }

    public function createAdmin(){
        $user = new UserModel;
        // Uselmodel::create('Admin', 'admin@test.com', bcrypt('123'));
        $user->name = 'Admin';
        $user->email = 'admin@test.com';
        $user->password ='123';
        $user->role='Profesor';

        $user->save();

    }
}
