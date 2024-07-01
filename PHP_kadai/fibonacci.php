<?php
$fib1 = 0;
$fib2 = 1;

echo "{$fib1} \n";
echo "{$fib2} \n";

while(true) {

    $fib3 = $fib1 + $fib2;

    echo "{$fib3} \n";
    $fib1 = $fib2;
    $fib2 = $fib3;

    if($fib3 > 10000) {
        break;
    }
}