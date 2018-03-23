<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomeResponseStatus()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAuthentication()
    {
        $user = factory(User::class)->create();

        // Verifica se o usuário está autenticado
        $response = $this->actingAs($user)
            ->get('home');

        $response->assertStatus(200);
    }

    public function testDatabaseUsers()
    {
        factory(User::class)->create([
            'email' => 'teste@teste.com.br'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'teste@teste.com.br'
        ]);
    }
}
