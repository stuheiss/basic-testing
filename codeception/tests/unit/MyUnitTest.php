<?php

namespace App;

class MyUnitTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeatureFoo()
    {
        $foo = new Foo;
        $this->assertEquals('Hello from foo!', $foo->index());
    }
    public function testSomeFeatureBar()
    {
        $bar = new Bar;
        $foo = new Foo($bar);
        $this->assertEquals('Hello from bar!', $foo->index());
    }
    public function testSomeFeatureZip()
    {
        $bar = \Mockery::mock(Bar::class);
        $bar->shouldReceive('index')
            ->with(/* some expected args */)
            ->once()
            ->andReturn('Hello from zip!');
        $foo = new Foo($bar);
        $this->assertEquals('Hello from zip!', $foo->index());
    }
}
