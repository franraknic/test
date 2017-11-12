<?php

/*A non-empty zero-indexed array A consisting of N integers is given.
 The array contains an odd number of elements, and each element of the array can be paired with another element that has the same value, except for one element that is left unpaired.
 Write a function that returns the unpaired element*/

function solution($A) {
  for ($i=0; $i < count($A); $i++) {

    $has_pair = false;

    for ($j=0; $j < count($A); $j++) {

      if ($A[$j] == $A[$i] && $j != $i) {
        $has_pair = true;
        break;
      }
    }
    if (!$has_pair) {
      return $A[$i];
    }
  }
  return -1; // input aray has no unpaired element
}
