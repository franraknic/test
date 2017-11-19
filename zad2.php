<?php

/*

Task description
A non-empty zero-indexed array A consisting of N integers is given. The consecutive elements of array A represent consecutive cars on a road.

Array A contains only 0s and/or 1s:

0 represents a car traveling east,
1 represents a car traveling west.

The goal is to count passing cars. We say that a pair of cars (P, Q), where 0 ≤ P < Q < N, is passing when P is traveling to the east and Q is traveling to the west.
*/

function solution($A) {

  $pair_counter = 0;

  for ($i=0; $i < count($A); $i++) {
    if ($A[$i] == 0) {
      for ($j=$i + 1; $j < count($A); $j++) {
        if ($A[$j] == 1) {
          $pair_counter += 1;
        }
      }
    }
  }if ($pair_counter > 1000000000) {
    return -1;
  }else {
    return $pair_counter;
  }
}

// sa restrikcijama bez array_ funkcija i jednim prolazom po input polju
// O(N) kompleksnost algorima

function solution($A){

  $j = 0;
  $pair_counter = 0;

  for ($i=0; $i < count($A); $i++) {

    if ($A[$i] == 0) {
      $j++;
    }elseif ($A[$i] == 1) {
      $pair_counter += $j;
    }
  }

  if ($pair_counter > 1000000000) {
    return -1;
  }else {
    return $pair_counter;
  }
}
