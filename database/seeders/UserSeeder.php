<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        User::insert([
          [
            "level" => "1",
            "name" => "gin",
            "email" => "gin@gmail.com",
            "password" => Hash::make("123"),
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "isAdmin" => false,
          ],
          [
            "level" => "1",
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("123"),
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "isAdmin" => true,
          ],
        ]);

        User::factory(5)->create();
    }
}
