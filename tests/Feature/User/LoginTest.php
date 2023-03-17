<?php

namespace Tests\Feature\User;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_view_a_login_form()
    {
        $response = $this->get('/');

        $response->assertRedirect('/login');
    }

    public function test_user_cannot_view_a_login_form_when_authenticated()
    {
        $user = User::factory()->make();

        $response = $this->actingAs($user)->withSession(['userId' => 1])->get('/');

        $response->assertRedirect('/dashboard');
    }

    public function test_user_can_login_with_correct_credentials()
    {
        $user = User::factory()->create([
            'password' => Hash::make($password = '123'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    public function test_user_cannot_login_with_wrong_credentials()
    {
        $user = User::factory()->create([
            'password' => Hash::make($password = '123'),
        ]);

        $wrongPassword = '321';

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $wrongPassword
        ]);

        $response->assertSeeText('Wrong Email/Password');
    }

    public function test_admin_can_login_with_correct_credentials()
    {
      $user = User::factory()->create([
          'password' => Hash::make($password = '123'),
          'isAdmin' => true
      ]);

      $response = $this->post('/login', [
          'email' => $user->email,
          'password' => $password
      ]);

      $response->assertRedirect('/admin/dashboard');
      $this->assertAuthenticatedAs($user);
    }
}
