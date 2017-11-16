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

// 100% na Codility - O(N) kompleksnost algoritma

function solution($A) {

    sort($A);
    $counter = 0;

    for($i = 0; $i < count($A); $i++){

        if($A[$i+1] != $A[$i]){
            $counter += 1;
            }
        }

    // polje s jednim elementom ima 1 distinct element
    if (count($A) == 1) {
      return 1;
    }else {
        return $counter;
    }

}

// bez array_ funkcija i jednim prolazom kroz input polje - O(N^2)

function solution($A) {

  $seen = [];

  for($i = 0; $i < count($A); $i++) {
    $seen_num = false;
    foreach ($seen as $value) {
      if ($value == $A[$i]) {
        $seen_num = true;
    }
  }
  if (!$seen_num) {
    $seen[] = $A[$i];
  }
}
  return count($seen);
}
