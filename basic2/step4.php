<?php

function isArmstrong($num) {
    $num_str = (string)$num;
    $sum = 0;
    for ($i = 0; $i < strlen($num_str); $i++) {
      $digit = (int)$num_str[$i];
      $sum += $digit ** 3;
    }
    return $sum === $num;
  }

$num1 = 153;
$num2 = 371;
$num3 = 9474;
$num4 = 9475;

echo "$num1 is " . (isArmstrong($num1) ? "an Armstrong number" : "not an Armstrong number") . "\n";
echo "$num2 is " . (isArmstrong($num2) ? "an Armstrong number" : "not an Armstrong number") . "\n";
echo "$num3 is " . (isArmstrong($num3) ? "an Armstrong number" : "not an Armstrong number") . "\n";
echo "$num4 is " . (isArmstrong($num4) ? "an Armstrong number" : "not an Armstrong number") . "\n";

?>