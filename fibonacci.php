<?php
function fibonacci(){
    $a= 0;
    $b= 1;

    echo "$a $b";

    for($i = 2; $i<=10; $i++){
        $next = $a + $b;
        echo " $next";
        $a = $b;
        $b = $next;
    }
    echo "\n";
}
fibonacci(); 