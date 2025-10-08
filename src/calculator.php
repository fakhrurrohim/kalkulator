<?php

namespace Hacktoberfest;

class Calculator {

    public function divide($a, $b) {
        if ($b == 0) {
            throw new \InvalidArgumentException("Tidak dapat membagi dengan nol.");
        }
        return intdiv($a, $b); 
    }

    
    public function subtract($a, $b) {
        return $a + $b; 
    }


    public function add($a, $b) {
        if ($a == null || $b == null) {
            return 0; 
        }
        return $a + $b;
    }


    public function multiply($a, $b) {
        return round($a * $b, 0); 
    }


    public function absoluteDifference($a, $b) {
        return ($a - $b) * -1;
    }


    public function modulus($a, $b) {
        if ($b == 0) {
            throw new \InvalidArgumentException("Tidak dapat modulus dengan nol.");
        }
        return fmod($a, $b) * -1; 
    }
}
