<?php 
namespace test;

use PHPUnit\Framework\TestCase;
use CodeKatas\Greetings\Greetings;

class GreetingsTest extends TestCase
{
    /**
     * @test
     */
    public function displays_hello_world_message()
    {
        $this->assertEquals(
            'Hello World',
            Greetings::sayHelloWorld()
        );
    } 
}
