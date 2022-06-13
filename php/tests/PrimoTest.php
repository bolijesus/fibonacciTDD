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

    public function testSumaPrimoListaVacia()
    {
        $this->assertEquals(0, $this->primo->sumaPrimo([]));
    }

    public function testSumaPrimoLista1()
    {
        $this->assertEquals(10, $this->primo->sumaPrimo([1,2,3,4,5]));
    }

    public function testPrimoMasAlto()
    {
        $this->assertEquals(97, $this->primo->primoMayor(100));
    }

    public function testPrimoMasAlto1()
    {
        $this->assertEquals(997, $this->primo->primoMayor(1000));
        $this->assertEquals(9973, $this->primo->primoMayor(10000));
        $this->assertEquals(99991, $this->primo->primoMayor(100000));
    }

    public function testPrimoMayorNegativo()
    {
        $this->assertNull($this->primo->primoMayor(-100));
    }

    public function testPrimoMayorParaCero()
    {
        $this->assertNull($this->primo->primoMayor(0));
    }

    public function testPrimoMayorParaUno()
    {
        $this->assertNull($this->primo->primoMayor(1));
    }

}