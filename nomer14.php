<?php
function faktorial($n){
    if ($n == 0 || $n ==1){
        return 1;
    }else{
        return $n * faktorial($n -1);
    }
}
$n=5;
echo "faktorial $n adalah:" .faktorial($n);
?>