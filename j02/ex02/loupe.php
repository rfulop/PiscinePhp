#!/usr/bin/php
<?php

function  ft_change_title($tab)
{
  return ($tab[1]."".strtoupper($tab[2]));
}

function  ft_change_link($tab)
{
  return ($tab[1]."".strtoupper($tab[2])."".$tab[3]."".$tab[4]."".$tab[5]);
}

if ($argc == 2)
{
  $fd = fopen($argv[1], 'r+');
  while ($line = fgets($fd))
  {
    $line = preg_replace_callback("#(title=\")(.*?)\"#", "ft_change_title", $line);
    $line = preg_replace_callback("#(<a .*?>)(.*?)(<)(.*?)(/a>)#", "ft_change_link", $line);
    $res .= $line;
  }
  echo $res;
}
?>
