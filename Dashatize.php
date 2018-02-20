<?php
/*
Given a number, return a string with dash'-'marks before and after each odd integer, but do not begin or end the string with a dash mark.

Ex:

dashatize(274) -> '2-7-4'
dashatize(6815) -> '68-1-5'
*/

function dashatize(int $num): string {
    $array = str_split($num);
    foreach ($array as $key=>&$value){
        if ($value % 2){
            $value = "-" . $value;        
            if (isset($array[$key + 1])){
                if (!($array[$key + 1] % 2)) $value .= "-";
            }
        }
    }    
    return trim(implode("", $array), "-");
}

echo dashatize(6815);