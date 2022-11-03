<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/joaquin/joaco')
            ->assertStatus(200)
            ->assertSee('Bienvenido Joaquin, tu apodo es joaco');
    }
    
    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/joaquin')
            ->assertStatus(200)
            ->assertSee('Bienvenido Joaquin');
    }
}