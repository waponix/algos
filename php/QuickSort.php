<?php

$array = ['grapes', 'pineapple', 'orange', 'apple', 'banana', 'berry', 'dragon fruit', 'tangerine', 'pomelo', 'lemon'];

/**
 * Sorting values in a stack by repeatedly checking the items 
 * by dividing them into two groups depending on a selected item as the pivot
 * 
 * @param array $array
 */
function quickSort(array $array) {
    // when item count is less than or equal to 1 consider it already sorted, return it immediately
    if (count($array) <= 1) {
        return $array;
    }

    // select the last item in the array as the pivot, and remove it from the stack
    $pivot = array_pop($array);

    $left = $right = [];

    // separate the array into two sub-arrays basesd on the pivot
    foreach($array as $item) {
        if ($item < $pivot) {
            $left[] = $item;
        } else {
            $right[] = $item;
        }
    }

    // recursively apply quickSort to the left and right array
    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

var_dump(quickSort($array));