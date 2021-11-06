<!-- plz read file readme.md first before u check my file, thx sir -->

<?php

$array = array("ayam", "ikan", "kucing");
coba($array, "1. original array");

array_push($array, "burung");
coba($array, "2. array push");

$replacements = array(0 => "Kucing Anggora");
$sisa = array_replace($array, $replacements);
coba($sisa, "3. array replace");

array_splice($array, 1, 1);
coba($array, "x. array splice");

unset($array[1]);
coba($array, "x. array unset");

function coba($output, $title){
  echo $title;
  echo "<br>";
  print_r($output);
  echo "<br><br>";
}
