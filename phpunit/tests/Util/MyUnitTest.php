<?php

namespace App;

use PHPUnit\Framework\TestCase;

class MyUnitTest extends TestCase
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
        // PHPUnit mock - ugly
        $bar = $this->getMockBuilder(Bar::class)
                    ->setMethods(['index'])
                    ->getMock();
        $bar->expects($this->once())
            ->method('index')
            ->with(/**/)
            ->will($this->returnValue('Hello from zip!'));

        // Mockery mock - nice!
        //$bar = \Mockery::mock(Bar::class);
        //$bar->shouldReceive('index')
        //    ->once()
        //    ->andReturn('Hello from zip!');

        $foo = new Foo($bar);
        $this->assertEquals('Hello from zip!', $foo->index());
    }
}
