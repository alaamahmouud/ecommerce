<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        factory(App\User::class, 30)->create()->each(function ($user) {
            $user->assignRole('admin'); //
        });

        factory(App\User::class, 30)->create()->each(function ($user) {
            $user->assignRole('client'); //
        });

    }


}
