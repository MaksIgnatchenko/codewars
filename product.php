<?php
/*
A grid of numbers with an equal height and width is given and your task is to find the largest possible product between four adjacent numbers in the same direction. The directions can be horizontal, vertical or diagonal.

Some example grids are shown below.

04 04 04 04 01 01  |  04*04*04*04 = 256
01 01 01 01 01 01  |
01 01 01 01 01 01  |
01 01 01 01 01 01  |
01 01 01 01 01 01  |
01 01 01 01 01 01  |

01 01 01 01 01 04  |  04*04*04*04 = 256
01 01 01 01 01 04  |
01 01 01 01 01 04  |
01 01 01 01 01 04  |
01 01 01 01 01 01  |
01 01 01 01 01 01  |

04 01 01 01 01 01  |  04*04*04*04 = 256
01 04 01 01 01 01  |
01 01 04 01 01 01  |
01 01 01 04 01 01  |
01 01 01 01 01 01  |
01 01 01 01 01 01  |

01 01 01 04 01 01  |  04*04*04*04 = 256
01 01 04 01 01 01  |
01 04 01 01 01 01  |
04 01 01 01 01 01  |
01 01 01 01 01 01  |
01 01 01 01 01 01  |
The smallest grid that can be given is 4x4 and the contained numbers will have a minimum value of 1 and a maximum value of 99.

A solution should be created to test all combinations of vertical, horizontal and diagonal lines.

Adapted from Project Euler.
*/
function getLargestProduct($grid) {
    $combinations = [];
    $count = count($grid);
    for ($row = 0; $row < $count; $row++){
        for ($cell = 0; $cell < ($count - 3); $cell++){
            $array = [];            
            for ($i = 0; $i < 4; $i++){
                $array[] = $grid[$row][$cell + $i];
             }
             $combinations[] = array_product($array);            
        }
    }
    for ($cell = 0; $cell < $count; $cell++){
        for ($row = 0; $row < ($count - 3); $row++){
            $array = [];            
            for ($i = 0; $i < 4; $i++){
                $array[] = $grid[$row + $i][$cell];
            }
            $combinations[] = array_product($array);
            
        }
    }
    for ($row = 0; $row < ($count - 3); $row++){
        for ($cell = 0; $cell < ($count- 3); $cell++){
            $array = [];
            for ($i = 0; $i < 4; $i++){
                $array[] = $grid[$row + $i][$cell + $i];
            }
            $combinations[] = array_product($array);
        }
    }
    for ($row = 0; $row < $count - 3; $row++){
        for ($cell = ($count - 1); $cell > 2; $cell--){
            $array = [];
            for ($i = 0; $i < 4; $i++){
                $array[] = $grid[$row + $i][$cell - $i];
            }
            $combinations[] = array_product($array);
        }
    }    
    return max($combinations);
}

































