<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::query()->create([
        //     "username" => "Oleg",
        //     "email" => "email@bk.com",
        //     "password" => Hash::make("123456"),
        //     "role" => "admin",
        // ]);

        User::query()->create([
            "username" => "Oleg1",
            "email" => "email1@bk.com",
            "password" => Hash::make("123456"),
        ]);
    }
}
