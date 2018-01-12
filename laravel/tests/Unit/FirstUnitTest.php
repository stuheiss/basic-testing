<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Repositories\Foo;

class FirstUnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testFooIsAnObject()
    {
        $foo = new Foo;
        $this->assertEquals('App\Repositories\Foo', get_class($foo));
    }
}
