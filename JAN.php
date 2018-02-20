<?php
function john($n){
    $doneA[0] = 1;
    $doneJ[0] = 0;
    for ($i = 1; $i <= $n; $i++){
        $doneJ[$i] = $i - $doneA[$doneJ{$i - 1}];
        $doneA[$i] = $i - $doneJ[$doneA{$i - 1}];
    }
    return $doneJ;
}

function ann($n){
    $doneA[0] = 1;
    $doneJ[0] = 0;
    for ($i = 1; $i <= $n; $i++){
        $doneJ[$i] = $i - $doneA[$doneJ{$i - 1}];
        $doneA[$i] = $i - $doneJ[$doneA{$i - 1}];
    }
    return $doneA;
}

print_r(john(6));
?>