<?php 

use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase{
    
    public function testStaticWhitNumberOneFibonacci()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $fibonacci->calcular(1));
    }
    
    public function testStaticWhitNumberTwoFibonacci()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(3, $fibonacci->calcular(2));
    }
}