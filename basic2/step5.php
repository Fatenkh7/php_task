<?php
function wordToDigit($word) {
    switch ($word) {
      case 'zero':
        return 0;
      case 'one':
        return 1;
      case 'two':
        return 2;
      case 'three':
        return 3;
      case 'four':
        return 4;
      case 'five':
        return 5;
      case 'six':
        return 6;
      case 'seven':
        return 7;
      case 'eight':
        return 8;
      case 'nine':
        return 9;
      default:
        return null;
    }
  }
  $word1 = 'zero';
  $word2 = 'three';
  $word3 = 'one';
  
  echo "$word1 is " . wordToDigit($word1) . "\n";
  echo "$word2 is " . wordToDigit($word2) . "\n";
  echo "$word3 is " . wordToDigit($word3) . "\n";

?>