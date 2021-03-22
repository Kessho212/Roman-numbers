<?php
function solution ($roman) {
  $number = 0;
  $tab["I"] = 1;
  $tab["V"] = 5;
  $tab["X"] = 10;
  $tab["L"] = 50;
  $tab["C"] = 100;
  $tab["D"] = 500;
  $tab["M"] = 1000;
  $temp = str_split($roman);
  $i=1;
  foreach ($temp as &$value) {
    if($tab[$value]<$tab[$temp[$i]])
      $number = $number - $tab[$value];
    else
      $number = $number + $tab[$value];
    $i++;
  }
  
  return $number;
}