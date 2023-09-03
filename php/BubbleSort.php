<?php

$array = ['grapes', 'pineapple', 'orange', 'apple', 'banana', 'berry', 'dragon fruit', 'tangerine', 'pomelo', 'lemon'];

function bubbleSort(array $array)
{
    $itemCount = count($array);
    
    // when number of items in the array is less than or equal to one, it means value is alread sorted return it immediately 
    if ($itemCount < 1) {
        return $array;
    }

    $sorted = null; // set this to null to begin initial attempt for sorting
    do {
        $sorted = false;
        for ($current = 0; $current < $itemCount - 1; $current++) {
            $next = $current + 1;

            if (isset($array[$next]) && $array[$next] < $array[$current]) {
                // switch the item order
                $nextVal = $array[$next];
                $array[$next] = $array[$current];
                $array[$current] = $nextVal;
                $sorted = true;
            }
        }
    } while ($sorted !== false);

    return $array;
}

var_dump(bubbleSort($array));