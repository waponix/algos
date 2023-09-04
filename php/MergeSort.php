<?php

$array = [
    'grapes', 
    'pineapple', 
    'orange', 
    'apple', 
    'banana', 
    'berry', 
    'dragon fruit', 
    'tangerine', 
    'pomelo', 
    'lemon',
    'melon',
    'strawberry',
    'peach',
    'starfruit',
];

/**
 * Sort array values by spliting the stack into halves then comparing them both against each other,
 * then recursively repeating the process until all items are ordered correctly
 * @param array $array
 */
function mergeSort(array $array) {
    $length = count($array);

    // when number of items in the array is less than or equal to one, 
    // it means value is already sorted, return it immediately 
    if ($length <= 1) return $array;

    // split the array into two groups
    $mid = (integer) ($length / 2);
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);

    // recursively apply mergeSort on both halves
    $left = mergeSort($left);
    $right = mergeSort($right);

    // compare the items from both halves and then combine the result
    $result = [];
    $leftItem = array_shift($left);
    $rightItem = array_shift($right);

    while ($leftItem !== null && $rightItem !== null) {
        if ($leftItem < $rightItem) {
            $result[] = $leftItem;
            $leftItem = array_shift($left);
        } else {
            $result[] = $rightItem;
            $rightItem = array_shift($right);
        }
    }

    while ($leftItem !== null) {
        $result[] = $leftItem;
        $leftItem = array_shift($left);
    }

    while ($rightItem !== null) {
        $result[] = $rightItem;
        $rightItem = array_shift($right);
    }

    return $result;
}

var_dump(mergeSort($array));