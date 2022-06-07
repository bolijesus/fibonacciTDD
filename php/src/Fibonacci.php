<?php 

class Fibonacci{
    public function calcular(int $numero)
    {
        $array = [0,1];
        for ($i=2; $i <= $numero; $i++) { 
            $array[$i] = $array[$i-1] + $array[$i-2];
        }
        return $array;
    }
}