<?php

$array = array("cat", "fish", "fox");
_p($array, "1. original array");

array_push($array, "dog");
_p($array, "2. array push");

array_pop($array);
_p($array, "4. array pop");

$sisa = array_slice($array, -1);
_p($sisa, "6. array slice");


function _p($output, $title){
  echo $title;
  echo "<br>";
  print_r($output);
  echo "<br><br>";
}