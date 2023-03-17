<?php

namespace Database\Seeders;

use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::insert([
          [
            "question" => "Kegunaan ball bearing pada engsel?",
            "id_day" => "1",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "question" => "Macam2 Mortise?",
            "id_day" => "1",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "question" => "Berat maksimum dari pivot hinge?",
            "id_day" => "1",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "question" => "question 1?",
            "id_day" => "essay",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "question" => "question 2?",
            "id_day" => "essay",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "question" => "question 3?",
            "id_day" => "essay",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "question" => "question 4?",
            "id_day" => "essay",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "question" => "question 5?",
            "id_day" => "essay",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
        ]);
    }
}
