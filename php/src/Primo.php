<?php

use LDAP\Result;

class Primo{

    public function esPrimo(int $numero)
    {
        if($numero < 2){
            return false;
        }
        for ($i=2; $i < (int)(sqrt($numero) + 1); $i++) { 
            if($numero % $i == 0){
                return false;
            }
        }
        return true;
    }

    public function sumaPrimo(array $numeros)
    {
        $resultado = 0;
        foreach ($numeros as $numero) {
            if ($this->esPrimo($numero)) {
                $resultado = $resultado + $numero;
            }
        }
        return $resultado;
    }

    public function primoMayor(int $numero)
    {
        for ($i=$numero; $i >= 2; $i--) { 
            if ($this->esPrimo($i)) {
               return $i;
            }
        }        
    }
}

