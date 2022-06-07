<?php 

use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase{
    
    private $fibonacci;

    public function setUp(): void
    {
        $this->fibonacci = new Fibonacci();
    }

    public function testStaticWhitNumberOneFibonacci()
    {
        
        $this->assertEquals([0,1], $this->fibonacci->calcular(1));
    }
    
    public function testStaticWhitNumberTwoFibonacci()
    {
        $this->assertEquals([0,1,1], $this->fibonacci->calcular(2));
    }

    public function testNumberOfDigitsForFunctionFibonacci()
    {
        $this->assertEquals([0,1,1,2,3,5,8,13], $this->fibonacci->calcular(7));
    }
}