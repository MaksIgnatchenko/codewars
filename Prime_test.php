<?php
/*
 Base-a pseudo-prime number n: a ^ (n - 1) ≡ 1 (mod n)
 If we able to find  element <a> when "a ^ (n - 1) ≡ 1 (mod n)" will not work - n is not a prime number.
 Value is too often go beyond the limit PHP_INT_MAX and we able to use functions bcpowmod and bcpow in this situation.  
 Test "Miller-Rubbin" is improved version of pseudoPrime test's.
 
 */
function pseudoPrime($n){
    function mod($a, $n){
        $exp = $n - 1;
        if (bcpowmod(bcpow($a, $n - 1) - 1, 1, $n)) $res = 1;
        else $res = 0;
        return $res;
    }    
    $chek = 0;
    foreach (range(1, $n - 1) as $a) $check += mod($a, $n);
    if ($check === 0) echo "This number is prime";
        else echo "This number is composite";
}    

pseudoprime(11);



