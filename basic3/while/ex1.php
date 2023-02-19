<?php

$i = 1;
$j = 0;
while ($i <= 8) {
    while ($j < $i) {
        echo "*";
        echo " ";
        $j++;
    }
    echo "\n";
    $i++;
    $j = 0;
}

?>
