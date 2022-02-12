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
            DB::table('users')->insert([
                'name' => Str::random(30),
                'email' => Str::random(30).'@gmail.com',
                'password' => Hash::make('password'),
            ]);
            
        });
    }

}
