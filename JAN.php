<?php
function ann($n){
    $done = [];
    for ($i = 0; $i <$n; $i++){
        if ($i == 0) $done[$i] = 1;
            else $done[$i] = $i - $done[$i - 1];
    }
    return $done;
}

print_r(ann(6));
