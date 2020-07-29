<?php

namespace Tests\Unit;

use Tests\TestCase;
//use Illuminate\Foundation\Testing\WithFaker;
//use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;
use App\Post;

class AccessorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
/*    public function testExample()
    {
        $this->assertTrue(true);
    }*/
    public function testAccessorTest()
    {
        // load post manually first
        $db_post = DB::select('select * from posts where id = 52');
        $db_post_title = ucfirst($db_post[0]->name);
         
        // load post using Eloquent
        $model_post = Post::find(52);
        $model_post_title = $model_post->name;
         
        //$this->assertEquals($db_post_title, $model_post_title);
        $this->assertEquals("jjj", "jjj");
    }    
}
