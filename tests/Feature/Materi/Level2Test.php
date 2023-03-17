<?php

namespace Tests\Feature\Materi;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Level2Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function test_level2_can_access_materi_day2()
    {
        $user = User::factory()->create([
          'level' => 2
        ]);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day2/a1')
          ->assertStatus(200);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day2/a2')
          ->assertStatus(200);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day2/a3')
          ->assertStatus(200);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day2/a4')
          ->assertStatus(200);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day2/a5')
          ->assertStatus(200);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day2/a6')
          ->assertStatus(200);
    }

    public function test_level2_cannot_access_materi_day1()
    {
        $user = User::factory()->create([
          'level' => 2
        ]);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day1/a1')
          ->assertStatus(403);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day1/a2')
          ->assertStatus(403);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day1/a3')
          ->assertStatus(403);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day1/a4')
          ->assertStatus(403);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day1/a5')
          ->assertStatus(403);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day1/a6')
          ->assertStatus(403);
    }
}
