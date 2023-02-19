<?php
$num = readline("Enter the nbr:");
$factoriel=1;
$i=$num;
while($i>=1){
    $factoriel*=$i;
    $i--;
}
echo "factoriel ".$num." is ".$factoriel;
?>
