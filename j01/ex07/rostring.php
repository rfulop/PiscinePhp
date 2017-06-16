#!/usr/bin/php
<?php

function   ft_epur_str($str)
{
  $res = "";
  $tab = array_filter(explode(" ", $str));
  foreach ($tab as $elem)
    $res .= $elem." ";
  $res = substr($res, 0, -1);
  return $res;
}

if ($argc > 1)
{
  $str = ft_epur_str($argv[1]);
  $tab = explode(' ', $str);
  $word = array_shift($tab);
  foreach ($tab as $elem)
    echo $elem." ";
  echo $word."\n";
}
?>
