<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password','remember_token'])->toArray());
        $user = User::find(1);
        $user->name = '天边放牧';
        $user->email = 'myhui0926@outlook.com';
        $user->is_admin = true;
        $user->save();
    }
}
