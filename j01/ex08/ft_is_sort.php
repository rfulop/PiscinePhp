#!/usr/bin/php
<?php

function  ft_is_sort($tab)
{
  $a = 0;
  $size = count($tab);
  $tmp = $tab;
  sort($tmp);
  while ($a < $size)
  {
    if ($tmp[$a] != $tab[$a])
      return false;
    ++$a;
  }
  return true;
}
?>
