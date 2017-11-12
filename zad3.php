<?php

/* Write a function that, given a zero-indexed array A consisting of N integers, returns the number of distinct values in array A*/

function solution($A) {
    $B = [];
    foreach ($A as $value) {
      if (array_search($value, $B) === false) {
        $B[] = $value;
      }
    }
    return count($B);
}
