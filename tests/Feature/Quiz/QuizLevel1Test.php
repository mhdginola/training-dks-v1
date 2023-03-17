<?php

namespace Tests\Feature\Quiz;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuizLevel1Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_access_quiz_day1_page()
    {
        $user1 = User::factory()->create([
          'level' => '1'
        ]);
        
        $this
          ->withSession([
            'userId' => $user1->id, 
          ])
          ->get('/quiz/day1')
          ->assertStatus(200);
    }

    // public function test_post_quiz_day1_and_levelup()
    // {
    //     $user = User::factory()->create([
    //       'level' => '1'
    //     ]);
    //     $this->withSession(['userId' => $user->id])
    //     ->post('/quiz/day1',[
    //       '1' => '3',
    //       '2' => '6',
    //       '3' => '10'
    //     ])
    //     ->assertRedirect('/hasil');

    //     $this->assertDatabaseHas('quizzes',[
    //       'nilai' => 100
    //     ]);

    //     $this->assertDatabaseHas('users',[
    //       'level' => 2
    //     ]);
    // }
}
