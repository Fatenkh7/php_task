<?php

function palindrome($str)
{
    if (is_string($str)) {
        return $str = strrev($str);
    }
    return false;
}

echo palindrome("hello")."\n";
echo palindrome("potatoes");
?>

