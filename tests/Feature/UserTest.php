<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSeeText("Laravel");
        $response->assertSeeText("background-color: #fff;");
        //$response->assertSeeText('<a href="https://laravel.com/docs">Docs</a>');
    }
}
