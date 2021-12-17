<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
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
        $password = Hash::make('admin');
        $admin = [
            'id' => 1,
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => $password, // password
            'remember_token' => Str::random(10),
        ];
        User::insert($admin);
        User::find(1)->role()->attach(1);
        User::factory(10)->create();
    }
}
