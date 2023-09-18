<?php
function factorial($number){
    if ($number < 2) {
        return 1;
}
else{
    return $number * factorial($number - 1);
}
}

$factorialOf05 = factorial(5);
echo "The factorial of 5 is $factorialOf05";
