<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    $arr1 = str_split($a);
    $arr2 = str_split($b);

  if (count($arr1) == count($arr2)) {
    $i=0;
    foreach($arr1 as $key=>$value) {
      if ($value != $arr2[$key]){
        $i++;
      }
    }
    return $i;
  } else {
    throw new InvalidArgumentException('DNA strands must be of equal length.');
  }

}
