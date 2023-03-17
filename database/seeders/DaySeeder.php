<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Day::insert([
            [
                'day' => '1',
                'sub' => '1'
            ],
            [
                'day' => '1',
                'sub' => '2'
            ],
            [
                'day' => '1',
                'sub' => '3'
            ],
            [
                'day' => '1',
                'sub' => '4'
            ],
            [
                'day' => '1',
                'sub' => '5'
            ],
            [
                'day' => '2',
                'sub' => '1'
            ],
            [
                'day' => '2',
                'sub' => '2'
            ],
            [
                'day' => '2',
                'sub' => '3'
            ],
            [
                'day' => '2',
                'sub' => '4'
            ],
            [
                'day' => '2',
                'sub' => '5'
            ],
            [
                'day' => '2',
                'sub' => '6'
            ],
            [
                'day' => '3',
                'sub' => '1'
            ],
            [
                'day' => '3',
                'sub' => '2'
            ],
            [
                'day' => '3',
                'sub' => '3'
            ],
            [
                'day' => '3',
                'sub' => '4'
            ],
            [
                'day' => '3',
                'sub' => '5'
            ],
            [
                'day' => '3',
                'sub' => '6'
            ],
            [
                'day' => '3',
                'sub' => '7'
            ],
            [
                'day' => '4',
                'sub' => '1'
            ],
            [
                'day' => '4',
                'sub' => '2'
            ],
            [
                'day' => '4',
                'sub' => '3'
            ],
            [
                'day' => '4',
                'sub' => '4'
            ],
            [
                'day' => '4',
                'sub' => '5'
            ],
            [
                'day' => '4',
                'sub' => '6'
            ],
            [
                'day' => '5',
                'sub' => '1'
            ],
            [
                'day' => '5',
                'sub' => '2'
            ],
        ]);
    }
}
