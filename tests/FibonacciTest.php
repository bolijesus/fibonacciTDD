<?php 

use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase{
    
    public function testStaticWhitNumberOneFibonacci()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $fibonacci->calcular(1));
    }
}