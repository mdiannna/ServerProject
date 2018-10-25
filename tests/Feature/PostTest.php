<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGet()
    {
    	$response = $this->get('/');

        $response->assertStatus(200);
    }

        /**
     * A basic test example.
     *
     * @return void
     */
    public function testPost()
    {
    	$response = $this->post('/post');
    	dd($response);
        $response->assertStatus(200);
    }
}
