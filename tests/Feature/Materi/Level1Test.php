<?php

namespace Tests\Feature\Materi;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class Level1Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_level1_can_access_materi_day1()
    {
        $user = User::factory()->create([
          'level' => 1
        ]);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day1/a1')
          ->assertStatus(200);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day1/a2')
          ->assertStatus(200);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day1/a3')
          ->assertStatus(200);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day1/a4')
          ->assertStatus(200);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day1/a5')
          ->assertStatus(200);

        $this
          ->withSession(['userId' => $user->id])
          ->get('/day1/a6')
          ->assertStatus(200);
    }
}
