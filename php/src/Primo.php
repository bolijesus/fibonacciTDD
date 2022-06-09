<?php 

class Primo{

    public function esPrimo(int $numero)
    {
        if($numero < 2){
            return false;
        }
        for ($i=2; $i < ($numero - 1); $i++) { 
            if($numero % $i == 0){
                return false;
            }
        }
        return true;
    }
}

