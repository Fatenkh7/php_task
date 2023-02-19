<?php
function power($num)
{
    if ($num <= 0) {
        return false;
    }
    return ($num & ($num - 1)) == 0;
    //(4 & (4-1) )== 0
}
 $num1=4;
 $num2=8;
 $num3=10;

if (power($num1)) {
    echo $num1." is a power of 2 \n";
} else {
    echo $num1." is not a power of 2 \n";
}

if (power($num2)) {
    echo $num2." is a power of 2 \n";
} else {
    echo $num2." is not a power of 2 \n";
}

if (power($num3)) {
    echo $num3." is a power of 2 \n";
} else {
    echo $num3." is not a power of 2 \n";
}
?>

