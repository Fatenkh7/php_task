<?php

$num = readline("enter the number:");

$sum = 0;
for ($i = $num; $i > 0; $i = (int) ($i / 10)) {
    $digit = $i % 10;
    $sum += $digit;
}

echo "sum of this number " . $num . " is : " . $sum;
