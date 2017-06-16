#!/usr/bin/php
<?php

function	ft_split($str)
{
	$tab = array_filter(explode(" ", $str));
	return $tab;
}

$tab = array();
$res = array();
unset($argv[0]);
foreach ($argv as $elem)
{
  $tab = ft_split($elem);
  $res = array_merge($res, $tab);
}
sort($res, SORT_STRING);
foreach ($res as $elem)
  echo $elem."\n";
?>
