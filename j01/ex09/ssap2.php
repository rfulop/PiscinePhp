#!/usr/bin/php
<?php

function	ft_split($str)
{
	$tab = array_filter(explode(" ", $str));
	return $tab;
}

function	ft_ssap($argc, $argv)
{
	$tab = array();
	$res = array();
	unset($argv[0]);
	foreach ($argv as $elem)
	{
  	$tab = ft_split($elem);
  	$res = array_merge($res, $tab);
	}
	sort($res, SORT_STRING | SORT_FLAG_CASE);
	return $res;
}

$res = ft_ssap($argc, $argv);
foreach ($res as $elem)
{
	if (ctype_alpha($elem))
		echo $elem."\n";
}
foreach ($res as $elem)
{
	if (is_numeric($elem))
		echo $elem."\n";
}
foreach ($res as $elem)
{
	if (!ctype_alpha($elem) && !is_numeric($elem))
		echo $elem."\n";
}
?>
