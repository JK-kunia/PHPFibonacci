<?php
    // フィボナッチ数
    $num = 50;
    print_r($fibo);
    $fibo[0] = 0;
    $fibo[1] = 1;
    
    for($i=0;$i<=50;$i++){
        if($i >= 2) {
        $fibo[$i] = $fibo[$i -1] + $fibo[$i -2];
        }    
    echo $fibo[$i]."\n";
    }
?>