<?php

function is_prime($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo is_prime(4) ? 'THis is a prime number' : 'THis is not a prime number';
echo "\n";
echo is_prime(1) ? 'THis is a prime number' : 'THis is not a prime number';
echo "\n";
echo is_prime(7) ? 'THis is a prime number' : 'THis is not a prime number';

?>
