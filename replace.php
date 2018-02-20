<?php
/*
Welcome.

In this kata you are required to, given a string, replace every letter with its position in the alphabet.

If anything in the text isn't a letter, ignore it and don't return it.

a being 1, b being 2, etc.

As an example:

alphabet_position('The sunset sets at twelve o\' clock.');
Should return "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11" as a string.
*/
$a = 'The sunset sets at twelve o\' clock.';

function alphabet_position(string $s): string {
    $lowChar = array_combine(range("a", "z"), range(1, 26));
    $upChar = array_change_key_case($lowChar, CASE_UPPER);   
    $result = [];
    for ($i = 0; $i < strlen($s); $i++){
        if (isset($lowChar[$s{$i}])) $result[] = $lowChar[$s{$i}];
        if (isset($upChar[$s{$i}])) $result[] = $upChar[$s{$i}];
    }
    return implode(" ", $result);    
}

echo alphabet_position($a);