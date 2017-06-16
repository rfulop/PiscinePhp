#!/usr/bin/php
<?php
$cont = file_get_contents("/var/run/utmpx");
$a = 0;
while ($cont != "")
{
	date_default_timezone_set("Europe/Paris");
	$unpack = unpack("A256user/A4id/A32ttyname/ipid/itype/ltime/llogtime/A256host/A64pad", $cont);
	if ($unpack['type'] == 7)
	{
		echo $unpack['user']."   ".$unpack['ttyname']."  ";
		$date = date("M j H:i", $unpack['time']);
		echo $date."\n";
	}
	$cont = substr($cont, 628);
}
?>
