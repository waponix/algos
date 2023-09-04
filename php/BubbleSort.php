<?php

$array = ['grapes', 'pineapple', 'orange', 'apple', 'banana', 'berry', 'dragon fruit', 'tangerine', 'pomelo', 'lemon'];

/**
 * Sorting the values in a stack by repeatedly running through it checking the current item against the next 
 * and changing their position accordingly
 * 
 * @param array $array
 */
function bubbleSort(array $array) {
    $itemCount = count($array);
    
    // when number of items in the array is less than or equal to one, 
    // it means value is already sorted, return it immediately 
    if ($itemCount <= 1) {
        return $array;
    }

    $sorted = null; // set this to null to begin initial attempt for sorting

    do {
        $sorted = false;
        for ($current = 0; $current < $itemCount - 1; $current++) {
            $next = $current + 1;

            if (isset($array[$next]) && $array[$next] < $array[$current]) {
                // switch the items position
                $nextVal = $array[$next];
                $array[$next] = $array[$current];
                $array[$current] = $nextVal;

                if ($sorted === true) continue;

                $sorted = true;
            }
        }
    } while ($sorted !== false);

    return $array;
}

var_dump(bubbleSort($array));