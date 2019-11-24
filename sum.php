<?php

/**
 * Returns the sum of two numbers
 * @param string $number1 first addendum
 * @param string $number2 second addendum
 * @return string sum
 */
function getSum($number1, $number2) {
  $number1 = str_pad($number1, strlen($number2), "0", STR_PAD_LEFT);
  $number2 = str_pad($number2, strlen($number1), "0", STR_PAD_LEFT);
  $remain = 0;
  $str = "";

  for ($i = strlen($number1) - 1; $i >= 0; $i--) {
    $temp = $number1[$i] + $number2[$i] + $remain;
    $temp = str_pad($temp, 2, "0", STR_PAD_LEFT);
    $temp = (string) $temp;
    $remain = $temp[0];
    $str .= $temp[1];
  }

  $result = strrev($str . $remain);

  return ltrim($result, "0");
}

echo(getSum("11111198988741111", "11111111998999961113"));
