<?php
/*
A natural number is called k-prime if it has exactly k prime factors, counted with multiplicity.

A natural number is thus prime if and only if it is 1-prime.

Examples:
k = 2 -> 4, 6, 9, 10, 14, 15, 21, 22, …
k = 3 -> 8, 12, 18, 20, 27, 28, 30, …
k = 5 -> 32, 48, 72, 80, 108, 112, …
#Task:

Write function count_Kprimes (or countKprimes or count-K-primes or kPrimes in C) which given parameters k, start, end (or nd) returns an array (or a list in C) of the k-primes between start (inclusive) and end (inclusive).
#Example:

countKprimes(5, 500, 600) --> [500, 520, 552, 567, 588, 592, 594]
...............................................................................

for all languages except Bash shell
Given positive integers s and a, b, c where a is 1-prime, b 3-prime, c 7-prime find the number of solutions of a + b + c = s. Call this function puzzle(s).

Examples:

puzzle(138) --> 1 ([2 + 8 + 128] is solution)
puzzle(143) --> 2 ([3 + 12 + 128, 7 + 8 + 128] are solutions)
*/

function countKprimes($k, $start, $nd) {
    $arr = array();
    for($i = $start; $i <= $nd; $i++){
        if(getPrimeFactors($i) == $k)
            $arr[] = $i;
    }
    return $arr;
}

function puzzle($s) {
    $primes = countKprimes(1, 1, $s);
    $threeprimes = countKprimes(3, 1, $s);
    $sevenprimes = countKprimes(7, 1, $s);
    
    $cnt = 0;
    for($a = 0; $a < count($primes); $a++){
        for($b = 0; $b < count($threeprimes); $b++){
            for($c = 0; $c < count($sevenprimes); $c++){
                if( $primes[$a] + $threeprimes[$b] + $sevenprimes[$c] == $s )
                    $cnt += 1;
            }
        }
    }
    
    return $cnt;
}

function getPrimeFactors($n){
    if ($n < 1) return 0;
    $cnt = 0;
    while ($n%2 == 0){
        $n /= 2;
        $cnt++;
    }
    for ($i = 3; $i <= sqrt($n); $i+=2) {
        while($n%$i == 0){
            $n /= $i;
            $cnt++;
        }
    }
    return ($n > 2) ? $cnt+1 : $cnt;
}




