<?php

require_once __DIR__ . '/../src/Calculator.php';

use Hacktoberfest\Calculator;

$calc = new Calculator();

echo "Testing Calculator:\n";
echo "2 + 3 = " . $calc->add(2, 3) . PHP_EOL;
echo "5 - 2 = " . $calc->subtract(5, 2) . PHP_EOL;
echo "3 * 4 = " . $calc->multiply(3, 4) . PHP_EOL;
echo "10 / 2 = " . $calc->divide(10, 2) . PHP_EOL;
