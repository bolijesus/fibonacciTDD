<?php 
use PHPUnit\Framework\TestCase;
use Primo;

class PrimoTest extends TestCase{
    private $primo;

    public function setUp(): void
    {
        $this->primo = new Primo();
    }
    
    public function testPrimo($numero = 0)
    {
        $this->assertEquals(false,$this->primo->esPrimo($numero));
    }
    
    public function testPrimo1($numero = 1)
    {
        $this->assertEquals(false,$this->primo->esPrimo($numero));
    }

    public function testPrimo2($numero = 2)
    {
        $this->assertEquals(true,$this->primo->esPrimo($numero));
    }
    
    public function testPrimo17($numero = 17)
    {
        $this->assertEquals(true,$this->primo->esPrimo($numero));
    }

    public function testPrimo50($numero = 50)
    {
        $this->assertEquals(false,$this->primo->esPrimo($numero));
    }
}