<?php

$a = 10;
$b = 2;

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
	return $a % $b;
}

echo add(1000,200) . PHP_EOL;
echo subtract(76,1) . PHP_EOL;
echo multiply(6,3) . PHP_EOL;
echo divide(100,10) . PHP_EOL;
echo modulus($a,$b) . PHP_EOL;

