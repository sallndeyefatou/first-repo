<?php

namespace Tests\Feature;

<<<<<<< HEAD
// use Illuminate\Foundation\Testing\RefreshDatabase;
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> e91f59c283c6219770903b857baa0eadd074c946
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
     */
    public function test_the_application_returns_a_successful_response(): void
=======
     *
     * @return void
     */
    public function test_example()
>>>>>>> e91f59c283c6219770903b857baa0eadd074c946
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
