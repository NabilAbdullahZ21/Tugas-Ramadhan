<?php
function fibonacci($n) {
    $a = 0;
    $b = 1;
    
    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        $c = $a;
        $a = $b;
        $b = $c+$b;
    }
}
fibonacci(10);
?>