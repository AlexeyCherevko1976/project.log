<?php

namespace Tests\Feature;

use Tests\TestCase;
//use Illuminate\Foundation\Testing\WithFaker;
//use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;

class AccessorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
/*    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }*/
    public function testBasicTest()
    {
        // load post manually first
        $db_post = DB::select('select * from posts where id = 53');
        $db_post_title = ucfirst($db_post[0]->name);
 
        $response = $this->get('/accessor/index');
 
        $response->assertStatus(200);
        $response->assertSeeText($db_post_title);
        $response->assertSeeText("id=");
        $response->assertSuccessful();
        $response->assertOk();
        $response->assertSee($db_post_title, $escaped = true);
        $response->assertSessionHasNoErrors();
        $response->assertLocation("http://localhost");
        $values=[$db_post_title, "id="];
        $response->assertSeeTextInOrder($values, $escaped = true);



    }
}
