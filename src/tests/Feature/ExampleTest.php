<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        // 1. Visit the home page
        $this->visit('/');
        // 2. Press a "Click Me" link
        $this->click('Laracasts');

        // 3. See "god"
        $this->see('god');

        // 4. Assert that the current url is /feedback
        $this->seePageIs('/feedback');
    }
}
