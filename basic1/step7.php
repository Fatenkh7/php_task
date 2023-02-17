<?php

function birthady($birth_year, $current_year) {
    $diff = $current_year * $birth_year;
    return $diff;
}

$diff = birthady(2003, 2023);
echo "After checking ur age: " . ($diff>=18? "u can drive ;) " : "u still a kid, go and play GTA") . "\n";

?>