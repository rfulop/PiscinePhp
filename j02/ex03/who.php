#!/usr/bin/php
<?php

function count_space($str, $maxUser)
{
	$i = 0;
	$spaces = " ";
	while (strlen($str) + $i != $maxUser)
	{
		$spaces = $spaces." ";
		++$i;
	}
	return $spaces;
}

function count_max_user($cont)
{
	$maxUser = 0;
	
	while ($cont != "")
	{
		$unpack = unpack("A256user/A4id/A32ttyname/ipid/itype/ltime/llogtime/A256host/A64pad", $cont);	
		if ($unpack['type'] == 7 && strlen($unpack['user']) > $maxUser)
			$maxUser = strlen($unpack['user']);
		$cont = substr($cont, 628);
	}
	return $maxUser;
}

$cont = file_get_contents("/var/run/utmpx");
$a = 0;
$res = array();
$maxUser = count_max_user($cont);
while ($cont != "")
{
	date_default_timezone_set("Europe/Paris");
	$unpack = unpack("A256user/A4id/A32ttyname/ipid/itype/ltime/llogtime/A256host/A64pad", $cont);
	if ($unpack['type'] == 7)
	{
		$spaces = count_space($unpack['user'], $maxUser);
		$date = date("M  j H:i", $unpack['time']);
		$res[$a] = $unpack['user'].$spaces.$unpack['ttyname']."  ".$date;
		$a++;
	}
	$cont = substr($cont, 628);
}
sort($res);
foreach ($res as $line)
	echo $line."\n";
?>
