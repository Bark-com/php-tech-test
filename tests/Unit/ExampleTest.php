<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $user = User::factory()->create();

        $this->assertNotEmpty($user->toArray());
    }
}
