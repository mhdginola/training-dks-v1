<?php

namespace Database\Seeders;

use App\Models\Answer;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Answer::insert([
          [
            "answer" => "Meringankan berat pintu",
            "checklist" => "0",
            "question_id" => "1",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "answer" => "Mengubah alur bukaan pintu",
            "checklist" => "0",
            "question_id" => "1",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "answer" => "Memperhalus Gerakan engsel",
            "checklist" => "1",
            "question_id" => "1",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "answer" => "Mengunci engsel",
            "checklist" => "0",
            "question_id" => "1",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],

          [
            "answer" => "Mortise sliding, mortise interlatch, roller latch, sliding arm mortise",
            "checklist" => "0",
            "question_id" => "2",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "answer" => "Mortise interlatch, rollerlatch, multipoint lock, sliding",
            "checklist" => "1",
            "question_id" => "2",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "answer" => "Mortise sliding, rolling caster, multipoint lock, interlatch",
            "checklist" => "0",
            "question_id" => "2",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "answer" => "Mortise roller latch, multiduo lock, interlatch, swing",
            "checklist" => "0",
            "question_id" => "2",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],

          [
            "answer" => "215 kg",
            "checklist" => "0",
            "question_id" => "3",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "answer" => "250 kg",
            "checklist" => "1",
            "question_id" => "3",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "answer" => "240 kg",
            "checklist" => "0",
            "question_id" => "3",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            "answer" => "235 kg",
            "checklist" => "0",
            "question_id" => "3",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
          ],
        ]);
    }
}
