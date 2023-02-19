<?php

$text="I love PHP ! PHP is the best programming language.";
$word="PHP";

$words = explode(" ", $text);
$count = 0;
$i = 0;

while($i < count($words)) {
    if(strtolower($words[$i]) == strtolower($word)) {
        $count++;
    }
    $i++;
}

echo "The word '$word' appears $count times in the text";
?>