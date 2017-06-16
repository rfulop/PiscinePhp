#!/usr/bin/php
<?php
	if ($argc != 2)
		exit ();
	$res = "";
	$tab = array_filter(explode(" ", $argv[1]));
	foreach ($tab as $elem)
		$res .= $elem." ";
	$res = substr($res, 0, -1);
	echo $res."\n";
?>
