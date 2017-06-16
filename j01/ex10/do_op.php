#!/usr/bin/php
<?php

if ($argc != 4)
  echo "Incorrect Parameters\n";
else
{
  $nb1 = intval($argv[1]);
  $sign = trim($argv[2]);
  $nb2 = intval($argv[3]);
  if ($sign == "+")
    $res = $nb1 + $nb2;
  else if ($sign == "-")
    $res = $nb1 - $nb2;
  else if ($sign == "*")
    $res = $nb1 * $nb2;
  else if ($sign == "/")
    $res = $nb1 / $nb2;
  else if ($sign == "%")
    $res = $nb1 % $nb2;
  echo $res."\n";
}
?>
