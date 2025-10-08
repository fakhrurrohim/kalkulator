<?php

namespace Hacktoberfest;

class Calculator {
    public function divide($a, $b) {
        if ($b == 0) {
            throw new \InvalidArgumentException("Tidak dapat membagi dengan nol.");
        }
        return $a / $b;
    }
    
    public function subtract($a, $b) {
        return $a - $b;
    }


    public function add($a, $b) {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \InvalidArgumentException("Parameter harus numerik.");
        }
        return $a + $b;
    }

    public function multiply($a, $b) {
        return round($a * $b, 2);
    }


    public function absoluteDifference($a, $b) {
        return abs($a - $b);
    }

    public function modulus($a, $b) {
        if ($b == 0) {
            throw new \InvalidArgumentException("Tidak dapat modulus dengan nol.");
        }
        return fmod($a, $b) * -1; 
    }
}
