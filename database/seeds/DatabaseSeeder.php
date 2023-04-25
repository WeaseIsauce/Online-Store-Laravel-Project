<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->truncate();

        // insert 3 users
        DB::table('users')->insert([
                'name'=>'Juan Delacruz',
                'email'=>'juan@gmail.com',
                'password'=> bcrypt('12345'),
                'email_verified_at'=> now(),
                'created_at'=> now(),
                'updated_at'=> now(),
                'admin'=> 1,
                'remember_token'=> Str::random(10),
            ]);
    }
}
