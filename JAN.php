<?php
function ann($n){
    $done = [];
    for ($i = 0; $i <$n; $i++){
        if ($i == 0) $done[$i] = 1;
            else $done[$i] = $i - $done[$i - 1];
    }
    return $done;
}

function john($n){
    $doneA[0] = 1;
    $doneJ[0] = 0;
    for ($i = 1; $i <= $n; $i++){
        $doneJ[$i] = $i - $doneA[$doneJ{$i - 1}];
        $doneA[$i] = $i - $doneJ[$doneA{$i - 1}];
    }
    return $doneJ;
}

print_r(john(6));
