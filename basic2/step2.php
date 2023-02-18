<?php

function greaterFn($num){
  if ($num > 30) {
    return "$num is greater than 30";
  } elseif ($num > 20) {
    return "$num is greater than 20";
  } elseif ($num > 10) {
    return "$num is greater than 10";
  } else {
    return "$num is less than to 10";
  }
}

echo greaterFn(40) . "\n" . greaterFn(21) . "\n" . greaterFn(12) . "\n" . greaterFn(8) . "\n";

?>