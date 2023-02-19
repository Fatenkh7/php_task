<?php
$side1 = 5;
$side2 = 5;
$diagonal = 7;

if ($diagonal * $diagonal == $side1 * $side1 + $side2 * $side2) {
    echo "The parallelogram is a rectangle.";
}
if ($side1 == $side2) {
    echo "The parallelogram is a rhombus.";
}
?>
