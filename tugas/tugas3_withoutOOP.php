<?php

$array = array("ayam", "ikan", "kucing");
_p($array, "1. original array");

array_push($array, "burung");
_p($array, "2. array push");

$replacements = array(0 => "Kucing Anggora");
$sisa = array_replace($array, $replacements);
_p($sisa, "7. array replace");

array_splice($array, 1);
_p($array, "6. array splice");

function _p($output, $title){
  echo $title;
  echo "<br>";
  print_r($output);
  echo "<br><br>";
}
