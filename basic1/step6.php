<?php

function calculateArea($height, $width) {
    $area = $height * $width;
    return $area;
}

$area = calculateArea(2, 3);
echo "The area is: " . $area;

?>
