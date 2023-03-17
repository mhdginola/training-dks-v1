<?php

namespace Database\Seeders;

use App\Models\Testdb;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Testdb::factory(5)->create();
        Testdb::insert([
          [
            "name" => "satu",
            "email" => "satu@gmail.com",
            "password" => "123",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "name" => "dua",
            "email" => "dua@gmail.com",
            "password" => "123",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
        ]);
    }
}
